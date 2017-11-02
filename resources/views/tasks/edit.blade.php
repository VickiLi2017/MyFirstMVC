<!--!DOCTYPE html>
<html>
<head>

    <title>My First MVC / edtit </title>

</head>
<body>

<h1> $task }} </h1>

</body>
</html-->


@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Edit Task</h1>
    </div>
    <form action="/MyFirstMVC/public/tasks/edit/{{$task->id}}" method="post" class="col-sm-8">
        @include('layouts.errors')
        <div class="form-group">
            {{ csrf_field() }}
            {{ method_field('patch') }}
            <label for="taskTitle">Task Title</label>
            <input type="text" class="form-control" id="taskTitle" name="body" value="{{$task->body}}">
        </div>
        <div class="form-group">
            <label for="taskStatus">Task Status</label>
            <select class="form-control" id="taskStatus" name="completed" value="{{$task->completed}}">
                @if (!($task->completed)){
                    <option value="0" selected>Incomplete</option>
                    <option value="1">Completed</option>
                @else
                    <option value="0">Incomplete</option>
                    <option value="1"  selected>Completed</option>
                @endif
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-primary">
            <a class="bg-primary" href="/MyFirstMVC/public/tasks">Cancel</a>
        </button>

        <div class="container">
            <div class="well-sm"></div>
            <p> Created at: {{date("F d, Y h:i:s", strtotime($task->created_at))}} </p>
            <p> Updated at: {{$task->updated_at}} </p>
        </div>
    </form>
@endsection





