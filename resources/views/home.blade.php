@extends('layout')  <!--('layouts.app')-->

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><h3>Dashboard</h3></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-10">
                            <table class="table table-table">
                                <tr><td colspan="3" class="h4">Welcome to Task Manager!</td></tr>
                                    <td><h5><a href="/MyFirstMVC/public/tasks">All Tasks List</a></h5></td>
                                    <td><h5><a href="/MyFirstMVC/public/tasks/user/{{auth()->user()->id}}">My Tasks List</a></h5></td>
                                    <td><h5><a href="/MyFirstMVC/public/tasks/create">Create Tasks </a></h5></td></tr>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
