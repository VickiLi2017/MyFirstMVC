@extends('layout')

@section('content')
    <div class="row">
        <div class="page-header">
            <h1>Edit Task</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <div class="col-sm-6">
                            <td>
                                <form action="/MyFirstMVC/public/tasks/{{$task->id}}/edit" method="post">
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

                                        <div>
                                            <div class="well-lg"></div>
                                            <p> Created at: {{date("F d, Y h:i:s", strtotime($task->created_at))}} </p>
                                            <p> Updated at: {{$task->updated_at}} </p>
                                        </div>
                                </form>
                            </td>
                        </div>
                        <div class="col-sm-6">
                            <td>
                                <h4 class="col-sm-2">Comments</h4>
                                <div>
                                    <button type="button" class="btn btn-primary col-xs-1 col-xs-offset-8" data-toggle="modal" data-target="#addComment">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="addComment" role="dialog">
                                        <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h3 class="modal-title">Add Comment</h3>
                                                </div>
                                                <div class="modal-body text-primary text-left">
                                                  <form action="/MyFirstMVC/public/tasks/{{$task->id}}/comments" method="post" class="col-md-8">
                                                        {{csrf_field()}}
                                                        <textarea name="body" placeholder="Your comment" class="form-control"></textarea>
                                                        <br />
                                                        <button type="submit" class="btn btn-primary">Add</button>
                                                        <button type="button" class="btn btn-primary" data-dismiss="modal">
                                                            <!--a class="bg-primary" href="/MyFirstMVC/public/tasks"-->Cancel<!--/a-->
                                                        </button>
                                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end model-->
                                </div>

                                <br />
                                <div class="col-sm-12">
                                    <ul class="list-group">
                                        @foreach($task->comments as $comment)
                                            <li class="list-group-item">
                                                {{$comment->body}}
                                            </li>

                                            <!--strong class="text-right"-->
                                            <label style="margin-left: 5px; font-weight: normal; font-family: monospace; font-size: smaller;">
                                                Created: {{$comment->created_at->diffForHumans()}}
                                            </label><p />
                                            <!--/strong-->

                                        @endforeach
                                    </ul>
                                </div>
                            </td>
                        </div>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Comments -->
    <!--div>
        <!-- Table -->
        <!--table class="table table-table table-striped">
            <tr>
                <td>
                    <div class="panel panel-default">
                        <div class="panel panel-heading"><h4>Add Comment</h4>
                            <div class="panel-body">
                                <form action="/MyFirstMVC/public/tasks/--$task->id}}/comments" method="post">
                                    // csrf_field() }}
                                    <div class="form-group">
                                        <textarea name="body" placeholder="Your comment" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Add Comment</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="panel panel-default">


                </td>
            </tr>
        </table-->

    <!--/div-->

@endsection




