<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Http\Requests;

use App\Models\User;
use App\Models\TodoList;

class TodoController extends Controller
{

    public function getTodoList(Request $request)
    {
    	$todo = $this->getUserTodo();

    	return view('pages.todo-list', compact('todo'));
    }

    public function getAddTodo(){
    	return view('pages.add-todo');
    }

    public function postAddTodo(Request $request){
    	$newTodo = new TodoList(['todo' => $request->todo]);
    	$user = User::find(Auth::id());

    	$user->todo()->save($newTodo);

    	return redirect('todo');
    }

    public function getEditTodo(Request $request){
    	$todoID = $request->todoID;

    	if($todoID != null){
    		$todo = TodoList::find($todoID);

    		if($todo){
    			return view('pages.edit-todo', compact('todo'));
    		}
    	}

    	return redirect('todo');
    }

    public function postEditTodo(Request $request){
    	$todoID = $request->todoID;
    	$todo = TodoList::find($todoID);
    	$todo->todo = $request->todo;
    	$todo->save();

    	return redirect('todo');
    }

    public function postDeleteTodo(Request $request){
    	$todoID = $request->todoID;
    	$todo = TodoList::find($todoID);
    	$todo->delete();

    	return redirect('todo');
    }

    protected function getUserTodo(){
    	return User::find(Auth::id())->todo()->get();
    }
}
