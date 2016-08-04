<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    public function todo()
    {
        return $this->hasMany('App\Models\TodoList', 'userID');
    }
}
