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

    //Função para carregar a ficha da Tasks
    public function viewTasks($id)
    {
        //Query que vai buscar o user que estou a clicar
        $tasks = DB::table('tasks')
            ->where('id', $id)
            ->first();


        // $tasks = Tasks::where('id', $id)
        //     ->first();

        return view('tasks.view_task', compact('tasks'));
    }

    public function deleteTasks($id){

        //Aqui podemos definir comportamentos para apagar tambem a chave estrangeira
        DB::table('tasks')
        ->where('id', $id)
        ->delete();



        return back();
    }
}
