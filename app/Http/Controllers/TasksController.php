<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TasksController extends Controller
{
  public function index() {
    $tasks = Task::all();
    return $tasks;
  }

  public function show(Task $task) {
    #$task = Task::find($id);
    return $task;
  }

  public function store(Request $request) {

    // xdebug_break();

    $_request = json_decode($request->getContent());
    // $_request = stripcslashes($_request);

    $task = new Task;
    $task->title = $_request->title;
    $task->body = $_request->body;
    $task->save();

    return $task;
    // Log::info($_request);
  }

}
