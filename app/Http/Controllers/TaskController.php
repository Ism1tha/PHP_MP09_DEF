<?php

namespace App\Http\Controllers;

use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        $title = 'Tasques';
        return view('index', compact('tasks', 'title'));
    }
}
