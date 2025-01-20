<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TaskManagerController extends Controller

{
    public function create()
    {
        return view('createTask');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
           'name' => 'required|min:5',
           'details'=> 'required',
           //'user_id'=> Auth::id(),
        ]);
        $validator->validate();

        DB::transaction(function () use($request) {
           Task::create([
              'name' => $request->input('name'),
              'details' => $request->input('details'),
              'user_id' => Auth::id(), // Add user_id here
           ]);
        });
        return to_route('task')->with('success', 'Task added successfully');

    }
    public function show($id)
    {
        $task = Task::findOrFail($id);
        return view('updateTask',compact('task'));
    }

    public function update(Request $request,$id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'details' => 'nullable|string',
        ]);

        $task = Task::findOrFail($id);

        $task->update([
            'name' => $request->input('name'),
            'details' => $request->input('details'),
        ]);

        return to_route('task')->with('success', 'Task updated successfully');
    }

    public function updateStatus($id,$status)
    {
        $task = Task::findOrFail($id);

        $task->update([
            'status' => $status
        ]);
        return to_route('task')->with('success', 'Task status updated');
    }
    public function delete($id)
    {
        $task = Task::findOrFail($id);

        $task->delete();
        return to_route('home')->with('success', 'Task deleted successfully');
    }
}
