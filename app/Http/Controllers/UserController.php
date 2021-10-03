<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Repositories\User\UserRepositoryInterface;

class UserController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
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
        $this->userRepository->create([
            "name" => $req->name,
            "email" => $req->email,
            "gender" => $req->gender
        ]);
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
        return View("dashboard", ['users' => $this->userRepository->getAll()]);
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
        $this->userRepository->delete($id);
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
        return View("edit", ['user' => $this->userRepository->find($id)]);
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

        $this->userRepository->update($req->id, [
            "name" => $req->name,
            "email" => $req->email,
            "gender" => $req->gender
        ]);
        return View("dashboard", ['users' => $this->userRepository->getAll()]);
    }
}