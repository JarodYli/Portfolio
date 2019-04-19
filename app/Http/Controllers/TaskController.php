<?php

namespace App\Http\Controllers;

use App\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store()
    {
        $project = new Task();

        $project->task = request('task');

        $project->save();

        return redirect('/crud');


    }

    public function show()
    {
        
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {
        
    }
}
