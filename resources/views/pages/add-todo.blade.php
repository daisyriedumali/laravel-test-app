@extends('layouts.basic')

@section('content')

<div class="todo-list">
	<h2>Add New Todo List</h2>
    <form method="POST" action="/addTodo">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <textarea name="todo"></textarea>
        <br />
        <input type="submit" value="Add" />
    </form>
</div>

@endsection