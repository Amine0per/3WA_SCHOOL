<?php

namespace App\Http\Controllers;
use App\Models\TodoList;

use Illuminate\Http\Request;

class ToDoListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $tasks = ToDoList::all();
        return view('dashboard', ['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            
            'body' => 'required',
        ]);
    
            $task = new ToDoList;
           
            $task->The_Task = $validatedData['body'];
            $task->Task_Status = "in-progress"; ;
            
            $task->save();
           
            return redirect('/dashboard')->with('success', 'Tache créé avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $task = ToDoList::find($id);

        return view('edittask', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $task = ToDoList::find($id);
       
        $task->The_Task = $request->input('body');
       
        $task->save();
    
        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = ToDoList::find($id);
        $task->delete();

    return redirect()->route('dashboard')->with('success', 'task deleted successfully.');
    }

    public function done(string $id)
    {
        $task = ToDoList::findOrFail($id);

        // Update the task status to completed
        $task->Task_Status = 'completed';
        $task->save();
        return redirect()->route('dashboard');
    }
}
