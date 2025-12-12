<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function allTasks(){
        $tasks = DB::table('tasks')
        ->join('users', 'users.id', 'tasks.user_id')
        ->select('tasks.*', 'users.name as usname')
        ->get();

        //  dd($tasks);

        return view('tasks.allTasks', compact('tasks'));

    }
}
