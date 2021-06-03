<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function register(Request $req)
    {

        $name = $req->name;
        $email = $req->email;
        $gender = $req->gender;
        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->gender = $gender;
        $user->save();
        return redirect("/");
    }
    public function getAllUsers()
    {
        $users = User::all();
        return View("dashboard", ['users' => $users]);
        //return User::all();
    }
    public function deleteUser($id)
    {
        $users = User::find($id);
        $users->delete();
        $usersAll = User::all();
        return View("dashboard", ['users' => $usersAll]);
        //return User::all();
    }
    public function getSingleUser($id)
    {
        $user = User::find($id);
        return View("edit", ['user' => $user]);
    }
    public function update(Request $req)
    {
        $targetUserId = $req->userid;
        $user = User::find($targetUserId);
        $user->name = $req->name;
        $user->email = $req->email;
        $user->gender = $req->gender;
        $user->save();
        $usersAll = User::all();
        return View("dashboard", ['users' => $usersAll]);
    }
}