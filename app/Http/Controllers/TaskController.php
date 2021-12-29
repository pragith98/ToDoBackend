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


    public function getAllTask(){
        $task=Task::all();
        return response()->json(['allTask'=>$task],200);
    }


    public function getTask($id){
        $task=Task::find($id);
        if(!$task){
            return response()->json(['msg'=>'task not found'],404);
        }else{
            return response()->json(['task'=>$task],200);
        }
    }


    public function updateTask(Request $request,$id){
        $task=Task::find($id);
        if(!$task){
            return response()->json(['msg'=>'task not found'],404);
        }else{
            $task->task=$request->input('task');
            $task->save();
            return response()->json(['updatedTask'=>$task],200);
        }
    }


    public function deleteTask($id){
        $task=Task::find($id);
        if(!$task){
            return response()->json(['msg'=>'task not found'],404);
        }else{
            $task->delete();
            return response()->json(['msg'=>'delete successful'],200);
        }
    }







}
