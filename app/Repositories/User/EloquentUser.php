<?php

namespace App\Repositories\User;

use App\Repositories\User\UserRepositoryInterface;
use App\Models\User;

class EloquentUser implements UserRepositoryInterface
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function find($id)
    {
        return User::find($id);
    }
    public function getAll()
    {
        return $this->user->users();
    }

    public function create(array $attributes)
    {
        return $this->user->store($attributes);
    }
    public function update($id, array $attributes)
    {
        return $this->user->updateUser($id, $attributes);
    }
    public function delete($id)
    {
        return $this->user->deleteUser($id);
    }
}