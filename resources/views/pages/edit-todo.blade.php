@extends('layouts.basic')

@section('content')

<div class="todo-list">
    <form method="POST" action="/editTodo">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="todoID" value="{{  $todo->id  }}">
        <textarea name="todo">{{ $todo->todo }}</textarea>
        <br />
        <input type="submit" value="Update" />
    </form>
</div>

@endsection