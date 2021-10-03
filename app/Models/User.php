<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];
    public function users()
    {
        return $this::all();
    }
    public function user($id)
    {
        return $this::find($id);
    }
    public function store($data)
    {
        return $this::create($data);
    }

    public function updateUser($id, $data)
    {
        return $this::where('id', $id)->update($data);
    }
    public function deleteUser($id)
    {
        $this->find($id)->delete();
    }
}