<?php

namespace App\Http\Controllers;

use App\Models\task;
use Illuminate\Console\View\Components\Task as ComponentsTask;
use Illuminate\Http\Request;

class Taskcontroller extends Controller
{
    public function store(Request $request){
        //dd($request->all());

        $task=new task();
      
        $request->validate([
            'task' => 'required|max:255|min:5',
        ]);
       $task->task=$request->task;
       $task->save();

       $date=Task::all();
       //dd($date);
       return view('task')->with('task',$date);
       //return redirect()->back();
    }
    public function completetask($id){
        $task=task::find($id);
        $task->iscompleted=1;
        $task->save();
        return redirect()->back();
    }
    public function notcompletetask($id){
        $task=task::find($id);
        $task->iscompleted=0;
        $task->save();
        return redirect()->back();
    }
    public function delete($id){
        $task=task::find($id);
        $task->delete();
        return redirect()->back();
    }
    public function updatetask($id){
        $task=task::find($id);

        return view('updatetask')->with('taskdata',$task);
    }
    public function updatetasks(Request $request){
        $id=$request->id;
        $task=$request->task;
        $data=task::find($id);
        $data->task=$task;
        $data->save();
        $datas=task::all();
        return view('task')->with('task',$datas);
    }
}
