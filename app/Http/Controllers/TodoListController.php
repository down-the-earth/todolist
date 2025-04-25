<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\DB;

 // Assuming you have a TodoList model
 
class TodoListController extends Controller
{
    //
    public function index()
    {
        $tasks = Task::all();
        return view('todo', ['tasks' => $tasks]);
    }

    public function add(Request $request)
    {
        $todo = $request->input('todo');
        $date = date('Y-m-d ');
        $task =Task::create([
            'task' => $todo,
            'description' => $request->input('description'),
            'completed' => false,
        ]);
        // Here you would typically save the todo to a database or perform some action
        // For demonstration, we'll just return the todo item
        return redirect()->route('index')->with('success', 'Todo added successfully!');
    }

    public function getlist()
    {
        $tasks = Task::all();
        return view('todo', ['tasks' => $tasks]);
       
    }

    public function delete($id){
        $task = Task::find($id);
        if($task){
            $task->delete();
            return redirect()->route('index')->with('success', 'Todo deleted successfully!');
        }
    }

    public function edit($id){
        $task = Task::find($id);
        if($task){
            return view('update', ['task' => $task]);
        }
        return redirect()->route('index')->with('error', 'Todo not found!');
    }

    public function update(Request $request,$id){
        $validate  = $request->validate([
            'todo' => 'required',
            'description'=> 'required'
        ]);
        
        $task =Task::find($id);
        
        if($task){
            $task->updateTask($validate);
        
            return redirect()->route('index')->with('success', 'Todo updated successfully!');
        }
        return redirect()->back()->with('error','Task not found');
    }
    
}