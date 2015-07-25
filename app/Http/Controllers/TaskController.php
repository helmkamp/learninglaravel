<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Tasks;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    public function index() {
        $tasks = Tasks::all();

        return view('tasks.index', compact('tasks'));
    }

    public function show($id) {
        $task = Tasks::findOrFail($id);

        return view('tasks.show', compact('task'));
    }
}
