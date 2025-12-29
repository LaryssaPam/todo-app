<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function index(){

        // lecture de la liste de tache
        $tasks = Task::all() ;

        // debug model
       // dd($tasks) ;

        return view('task',compact('tasks'));
    }
}
