<?php

namespace App;
use App\Role;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';

    public function Role(){
        return $this->HasOne(Role::class);
    }
   
}
