@extends('layouts.basic')

@section('content')

<div class="todo-list">
	<h2>My Todo List</h2>
    <ul>
    	@foreach($todo as $list)
    		<li id="{{ $list->id }}">
    			{{ $list->todo }} 
    			<form method="GET" action="/edit/{{  $list->id  }}">
			        <input type="submit" value="Edit"/>
			    </form>
    			<form method="POST" action="/deleteTodo">
    				<input type="hidden" name="_token" value="{{ csrf_token() }}">
    				<input type="hidden" name="todoID" value="{{  $list->id  }}">
			        <input type="submit" name="delete" value="Delete" />
			    </form>
    		</li>
    	@endforeach
    </ul>

    <div>
	    <a href="{{ URL::to('/add') }}">Add New Todo</a>
    </div>
</div>

@endsection