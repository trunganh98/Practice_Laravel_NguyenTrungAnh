<?php


namespace App\Http\Controllers;
use App\list_post;
use App\Task;
use App\Http\Controllers;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\Controller as BaseController;

class TaskController extends BaseController
{
    public function Welcome(){
        return view('welcome');
    }

    public function addTask(Request $request){
        $task = new Task();
        $task->name = $request->name;
        $task->price = $request->price;
        $task->description = $request->desc;
        $task->save();
        return redirect('/');
    }
    public function listTask(){
        $tasks = Task::orderBy('id','desc')->get();
        return view('welcome',['welcome'=>$tasks]);
    }
    public function deleteTask($id){
        Task::where('id', $id)->delete();
        return Redirect::to('/');

    }

}
