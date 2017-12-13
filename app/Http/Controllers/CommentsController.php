<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;
use App\Comment;

class CommentsController extends Controller
{
    protected $guarded=array();
    public function create(Task $task, Request $request) {
        //dd($request->body);
        $task->addComment(request('body'));
        return back();
    }
}
