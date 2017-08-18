<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Comment;

class CommentsController extends Controller
{

    public function store(Task $task, Request $request)
    {
      $this->validate(request(), ['body' => 'required|min:2']);
      $_request = json_decode($request->getContent());
      $body = $_request->body;
      // $_request = stripcslashes($_request);
      $task->addComment($body);

      return 200;
    }
}
