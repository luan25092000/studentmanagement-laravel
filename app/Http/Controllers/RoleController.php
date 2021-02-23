<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $role = Role::create(['name' => 'admin']);
        // $role1 = Role::create(['name' => 'supervisor']);
        $role2 = Role::create(['name' => 'writer']);

        // $permission1 = Permission::create(['name' => 'add students']);
        // $permission2 = Permission::create(['name' => 'edit students']);
        // $permission3 = Permission::create(['name' => 'delete students']);
        $permission4 = Permission::create(['name' => 'view students']);

        // $permission1->assignRole($role);
        // $permission2->assignRole($role);
        // $permission3->assignRole($role);
        // $permission4->assignRole($role);

        $permission4->assignRole($role2);

        // $permission1->assignRole($role2);
        // $permission2->assignRole($role2);
        // $permission3->assignRole($role2);

        // $user1 = User::find(1);
        // $user2 = User::find(2);
        // $user3 = User::find(3);

        // $user1->assignRole('writer');
        // $user2->assignRole('admin');
        // $user3->assignRole('supervisor');

        return redirect()->route('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
