<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'todo_list';

    protected $fillable = ['userID', 'todo', 'isDone'];
}
