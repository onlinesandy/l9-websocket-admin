<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Arr;

class UserController extends Controller
{

    function __construct()
    {
         $this->middleware('permission:users.list|users.create|users.edit|users.delete', ['only' => ['index','store']]);
         $this->middleware('permission:users.create', ['only' => ['create','store']]);
         $this->middleware('permission:users.edit', ['only' => ['edit','update']]);
         $this->middleware('permission:users.delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::latest();

        if ($request->get('status') == 'archived') {
            $users = $users->onlyTrashed();
        }

        $users = $users->paginate(10);
        return view('users.index', ['data' => $users, 'title' => 'Users']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name', 'name')->all();
        return view('users.create', ['roles' => $roles, 'title' => 'Create User']);
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
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required',
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        return redirect()
            ->route('users.index')
            ->with('success', 'User created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show', ['user' => $user, 'title' => 'Show User']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name', 'name')->all();

        return view('users.edit', ['user' => $user, 'roles' => $roles, 'userRole' => $userRole, 'title' => 'Show User']);
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
            'name' => 'required',
            // 'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'same:confirm-password',
            'roles' => 'required',
        ]);

        $input = $request->all();
        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = Arr::except($input, ['password']);
        }

        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')
            ->where('model_id', $id)
            ->delete();

        $user->assignRole($request->input('roles'));

        return redirect()
            ->route('users.index')
            ->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()
            ->route('users.index')
            ->with('success', 'User deleted successfully');
    }

    public function restore($id)
    {
        User::where('id', $id)
            ->withTrashed()
            ->restore();

        return redirect()
            ->route('users.index', ['status' => 'archived'])
            ->withSuccess(__('User restored successfully.'));
    }

    public function forceDelete($id)
    {
        User::where('id', $id)
            ->withTrashed()
            ->forceDelete();

        return redirect()
            ->route('users.index', ['status' => 'archived'])
            ->withSuccess(__('User force deleted successfully.'));
    }
}
