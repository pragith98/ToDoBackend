<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    
    public function storeTask(Request $request){

        $task = new Task;
        $task->task=$request->task;
        $task->status='new';
        $task->save();

        $data=Task::all();

        return response()->json([$data],200);

    }



}
