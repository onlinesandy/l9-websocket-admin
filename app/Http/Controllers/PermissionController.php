<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;
use Excel;
use Illuminate\Support\Facades\Artisan;


class PermissionController extends Controller
{

    function __construct()
    {
         $this->middleware('permission:permissions.list|permissions.create|permissions.edit|permissions.delete', ['only' => ['index','store']]);
         $this->middleware('permission:permissions.create', ['only' => ['create','store']]);
         $this->middleware('permission:permissions.edit', ['only' => ['edit','update']]);
         $this->middleware('permission:permissions.delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource    .
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $list_per_page = 10;
        $permissions = Permission::orderBy('id','DESC')->paginate($list_per_page);
        return view('permissions.index',['permissions'=>$permissions,'title'=>'Permissions Listing'])
            ->with('i', ($request->input('page', 1) - 1) * $list_per_page);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('permissions.create',['title'=>'Create Permission'] );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:permissions,name'
        ]);

        $permission  = Permission::create(['name' => $request->input('name'),'guard_name'=>'web']);

        return redirect()->route('permissions.index')
                        ->with('success','Permission created successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $permission = Permission::find($id);
        return view('permissions.show',[
            'permission'=>$permission,
            'title'=>'Show Permission']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permission = Permission::find($id);

        return view('permissions.edit',[
            'permission'=>$permission,
            'title'=>'Edit Permission']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => "required|unique:permissions,name,$id"
        ]);

        $permission = Permission::find($id);
        $permission->name = $request->input('name');
        $permission->save();

        return redirect()->route('permissions.index')
                        ->with('success','Role updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("permissions")->where('id',$id)->delete();

        $command = 'cache:forget spatie.permission.cache';
        Artisan::call($command);


        return redirect()->route('permissions.index')
                        ->with('success','Permission deleted successfully');
    }

}

