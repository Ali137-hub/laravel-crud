<?php

namespace App\Services;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;

class UserService
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }
    /**
     * Display a listing of the resource.
     *  @author: haseeb
     *  @param:
     *  @return Collection
     *
     */
    public function users()
    {
        return $this->user->users();
    }
    public function user($id)
    {
        return $this->user->user($id);
    }
    public function create(StoreUserRequest $req)
    {
        $data = [
            "name" => $req->name,
            "email" => $req->email,
            "gender" => $req->gender
        ];
        return $this->user->store($data);
    }
    public function update(StoreUserRequest $req)
    {
        $data = [
            "name" => $req->name,
            "email" => $req->email,
            "gender" => $req->gender
        ];
        $this->user->updateUser($req->userid, $data);
    }
    public function delete($id)
    {
        $this->user->deleteUser($id);
    }
}