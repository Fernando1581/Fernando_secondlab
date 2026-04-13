<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::latest()->get();
        return view('todos.index', compact('todos'));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'task' => 'required'
        ]);

        Todo::create([
            'task' => $request->task,
            'is_done' => false
        ]);

        return redirect('/')->with('success', 'Todo added!');
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, Todo $todo)
    {
        $todo->update([
            'task' => $request->task,
            'is_done' => $request->has('is_done')
        ]);

        return redirect('/')->with('success', 'Todo updated!');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();

        return redirect('/')->with('success', 'Todo deleted!');
    }
}