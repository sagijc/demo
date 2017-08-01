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

    $_request = json_encode($request->getContent() );
    Log::info($_request);
  }

}
