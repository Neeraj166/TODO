<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;

use function GuzzleHttp\Promise\all;

class TasksController extends Controller
{
    public function index()
    {
        $tasks=User::with('tasks')->get();
        // dd($task);
        
        return view('dashboard', compact('tasks'));
        // $tasks = auth()->user()->tasks();
        // dd($tasks);
        // $tasks = Task::all();
        // return view('dashboard', compact('tasks'));
    }

    public function add()
    {
    	return view('add');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'description' => 'required'
        ]);
    	$task = new Task();
    	$task->description = $request->description;
    	$task->user_id = auth()->user()->id;
    	$task->save();
    	return redirect('/dashboard'); 
    }

    public function edit(Task $task)
    {
        if (auth()->user()->id == $task->user_id)
        {            
                return view('edit', compact('task'));
        }           
        else {
             return redirect('/dashboard');
         }   
        // return view('edit',compact('task'));
                 	
    }

    public function update(Request $request, Task $task)
    {
    	if(isset($_POST['delete'])) {
    		$task->delete();
    		return redirect('/dashboard');
    	}
    	else
    	{
            $this->validate($request, [
                'description' => 'required'
            ]);
    		$task->description = $request->description;
	    	$task->save();
	    	return redirect('/dashboard'); 
    	}    	
    }

}
