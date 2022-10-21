<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImageUpload;

class DropzoneController extends Controller
{
    /**
     * Generate Image upload View
     *
     * @return void
     */
    public function index()
    {
        $macAddr = exec('getmac');
        $ipAddr=\Request::ip();


        dd($macAddr,$ipAddr);
        return view('dropzone.index',['title'=>'File Upload']);
    }

    /**
     * Image Upload Code
     *
     * @return void
     */
    public function store(Request $request)
    {
        $image = $request->file('file');

        $imageName = time().'.'.$image->extension();
        $imagePath = public_path('images');
        $image->move($imagePath,$imageName);

        $imageUpload = new ImageUpload();
        $imageUpload->filename = $imageName;
        $imageUpload->path = $imagePath;
        $imageUpload->save();

        return response()->json(['success'=>$imageName]);
    }

    public function fileDestroy(Request $request)
    {
        $filename =  $request->get('filename');
        ImageUpload::where('filename',$filename)->delete();
        $path=public_path().'/images/'.$filename;
        if (file_exists($path)) {
            unlink($path);
        }
        return $filename;
    }
}
