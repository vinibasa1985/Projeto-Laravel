<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller


{
    // Mostrar formulário
    public function addTask()
    {
        // Buscar utilizadores da base de dados
        $users = DB::table('users')->get();

        return view('tasks.add_task', compact('users'));
    }

    // Guardar tarefa
    public function storeTask(Request $request)
    {
        // Validação (OBRIGATÓRIA no backend)
        $request->validate([
            'name' => 'required|string|max:50',
            'description' => 'required|string',
            'user_id' => 'required|exists:users,id',
        ]);

        DB::table('tasks')->insert([
            'name' => $request->name,
            'description' => $request->description,
            'user_id' => $request->user_id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('message', 'Tarefa adicionada com sucesso');
    }



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
