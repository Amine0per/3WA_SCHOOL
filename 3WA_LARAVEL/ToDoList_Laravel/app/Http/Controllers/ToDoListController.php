<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ToDoTask;

class ToDoListController extends Controller
{

    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = ToDoTask::all();
        return view('tasks', ['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    
    public function done(string $id)
    {
        $task = ToDoTask::findOrFail($id);

        // Update the task status to completed
        $task->Task_Status = 'completed';
        $task->save();
        return redirect()->route('tasks.index');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            
            'body' => 'required',
        ]);
    
            $task = new ToDoTask;
           
            $task->The_Task = $validatedData['body'];
            $task->Task_Status = "in-progress"; ;
            
            $task->save();
           
            return redirect('/tasks')->with('success', 'Tache créé avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $task = ToDoTask::find($id);
        return view('showtask', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $task = ToDoTask::find($id);

        return view('edittask', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */

     
    public function update(Request $request, string $id)
    {
        $task = ToDoTask::find($id);
       
        $task->The_Task = $request->input('body');
       
        $task->save();
    
        return redirect()->route('tasks.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = ToDoTask::find($id);
        $task->delete();

    return redirect()->route('tasks.index')->with('success', 'task deleted successfully.');
    }
}
