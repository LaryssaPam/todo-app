<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function index(){

       

        return Task::all()->toResourceCollection();
    }
    // Créer un nouveau post
    public function store(Request $request):JsResponse{

    }
}
