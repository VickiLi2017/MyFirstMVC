<!-- create.blade.php -->

@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Create New Task</h1><br  />
    </div>

    <div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
    @endif
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
    @endif
        <!--<form method="post" action="url('tasks')}}">-->
        <form action="/MyFirstMVC/public/tasks" method="post" class="col-sm-8">

            <div class="form-group">
                {{ csrf_field() }}
                <label for="taskTitle">Task Title</label>
                <input type="text" class="form-control" id="taskTitle" name="body">
            </div>
            <div class="form-group">
                <label for="taskStatus">Task Status</label>
                <select class="form-control" id="taskStatus" name="completed" selected="0">
                    <option value="0">Incomplete</option>
                    <option value="1">Complete</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
            <button type="button" class="btn btn-primary">
                <a class="bg-primary" href="/MyFirstMVC/public/tasks">Cancel</a>
            </button>
        </form>

    </div>

<!--/body>
</html-->

@endsection