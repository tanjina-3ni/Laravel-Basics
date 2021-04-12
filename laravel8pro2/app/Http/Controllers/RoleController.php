<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;

class RoleController extends Controller
{
    public function addRole()
    {
        $roles = [
            ["name" => "Addministrator"],
            ["name"=>"Editor"],
            ["name"=>"Author"],
            ["name"=>"Contributor"],
            ["name"=>"Subscribers"]

        ];
        Role::insert($roles);
        return "Roles are created successfully!";
    }

    public function addUser()
    {
        $user = new User();
        $user->name = 'Aan';
        $user->email = 'Aan@gmail.com';
        $user->password = encrypt('secret');
        $user->save();

        $roleids = [3,2];
        $user->roles()->attach($roleids);
        return "record has been created successfully!";
    }

    public function getRolesByUser($id)
    {
        $user = User::find($id);
        $roles = $user->roles;
        return $roles;
    }

    public function getAllUserByRole($id)
    {
        $role = Role::find($id);
        $user = $role->users;
        return $user;

    }
}
