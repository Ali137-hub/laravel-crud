<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Services\UserService;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }


    /**
     * Display a listing of the resource.
     *  @author: haseeb
     *  @param:Request
     *  @return \Illuminate\Http\Response
     *
     */

    public function register(StoreUserRequest $req)
    {
        $this->userService->create($req);
        return redirect("/");
    }

    /**
     * Display a listing of the resource.
     *  @author: haseeb
     *  @param:null
     *  @return \Illuminate\Http\Response
     *
     */

    public function getAllUsers()
    {
        return View("dashboard", ['users' => $this->userService->users()]);
    }

    /**
     * Display a listing of the resource.
     *  @author: haseeb
     *  @param:USER ID
     *  @return \Illuminate\Http\Response
     *
     */

    public function deleteUser($id)
    {
        $this->userService->delete($id);
        return redirect()->back();
    }

    /**
     * Display a listing of the resource.
     *  @author: haseeb
     *  @param:USER ID
     *  @return \Illuminate\Http\Response
     *
     */

    public function getSingleUser($id)
    {
        return View("edit", ['user' => $this->userService->user($id)]);
    }

    /**
     * Display a listing of the resource.
     *  @author: haseeb
     *  @param:Request
     *  @return \Illuminate\Http\Response
     *
     */
    public function update(StoreUserRequest $req)
    {

        $this->userService->update($req);
        return View("dashboard", ['users' => $this->userService->users()]);
    }
}