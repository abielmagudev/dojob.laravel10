<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('tasks.index', [
            'tasks' => Task::with('job')->get(),
        ]);
    }

    public function create()
    {
        return view('tasks.create', [
            'jobs' => Job::orderBy('name')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function show(Task $task)
    {
        return view('tasks.show')->with('task', $task);
    }

    public function edit(Task $task)
    {
        return view('tasks.edit')->with('task', $task);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
    }
}
