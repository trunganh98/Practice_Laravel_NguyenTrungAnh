<?php


namespace App\Http\Controllers;
use App\list_post;
use App\Task;
use App\Http\Controllers;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
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
        return view('welcome',['tasks'=>$tasks]);


    }
    public function deleteTask($id){
        Task::where('id', $id)->delete();
        return redirect('/');

    }
    public function editTask(Request $request, $id){
        $data = array();
        $data['name'] = $request->name;
        $data['price'] = $request->price;
        $data['description'] = $request->description;
            Task::where('id', $id)->update($data);
            return redirect('/');
    }

}
