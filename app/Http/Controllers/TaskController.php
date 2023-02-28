<?php

namespace App\Http\Controllers;

use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        $title = 'Tasks';
        return view('index', compact('tasks', 'title'));
    }
}
