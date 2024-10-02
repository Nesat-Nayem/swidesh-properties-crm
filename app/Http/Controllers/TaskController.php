<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::paginate(10);
        return view('crm.task.index', compact('tasks'));
    }

    public function create()
    {
        return view('crm.task.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'project' => 'required',
            'deadline' => 'nullable|date',
            'assigned' => 'required',
            'status' => 'required',
            'description' => 'nullable',
        ]);

        Task::create($request->all());

        return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
    }

    public function show(Task $task)
    {
        return view('crm.task.show', compact('task'));
    }

    public function edit(Task $task)
    {
        return view('crm.task.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required',
            'project' => 'required',
            'deadline' => 'nullable|date',
            'assigned' => 'required',
            'status' => 'required',
            'description' => 'nullable',
        ]);

        $task->update($request->all());

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully.');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.');
    }
}
