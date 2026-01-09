<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;





class UserController extends Controller
{
    public function addUser()
    {
        $pageAdmin = 'Vinicius';
        return view('users.add_users', compact('pageAdmin'));
    }

    //função que recebe os dados do formulário, valida e insere na base de dados
    public function storeUser(Request $request){
        // dd($request->all());
        //dd('formulário submetido'); //Para testar

        $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|string'

        ]);

        User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('users.all')->with('message', 'Contato adicionado com sucesso');
    }



    public function allUsers()
    {
        $cesaeInfo =
            [
                'name' => 'Cesae',
                'address' => 'Rua São João da Madeira',
                'email' => 'cesae@cesae.pt'
            ];

        //Simular consulta a base de dados
        $students = [
            ['name' => 'Noé', 'email' => 'noe@gmail.com'],
            ['name' => 'Cravo', 'email' => 'cravo@gmail.com'],
            ['name' => 'Margarida', 'email' => 'margarida@gmail.com'],
            ['name' => 'Rosa', 'email' => 'rosa@gmail.com'],
        ];

        // dd($students);
        // dd($students[1]['name']);
        // $users = DB::table('users')->get();
        $users = User::get();


        return view('users.allUsers', compact('cesaeInfo', 'students', 'users'));
    }




    public function insertUserIntoDB()
    {

         //validar se dados estão em conformidade com a estrutura da base de dados


        //se passar em todas as validações, insere então na base de dados
        DB::table('users')
            ->updateOrInsert(
                [
                    'email' => 'Rafaela321@gmail.com',
                ],

                [
                    'name' => 'Rafaela',
                    'password' => 'RAfaela1234',
                    'updated_at' => now(),
                    'nif' => '2444444444'
                ]
            );
        return response()->json('user inserido com sucesso');
    }
    public function updateUserIntoDB()
    {


        //validar se dados estão em conformidade com a estrutura da base de dados

        //se passar em todas as validações, insere então na base de dados
        DB::table('users')
            ->where('id', 2)
            ->update([
                'name' => 'Rafaela Mudou de Nome porque não gostava do antigo',
                'updated_at' => now(),
            ]);

        return response()->json('user atualizado com sucesso');
    }

    public function deleteUserFromDB()
    {

        //query para apagar
        DB::table('users')
            ->where('id', 5)
            ->delete();

        return response()->json('user apagado com sucesso');
    }


    public function selectUsersFromDB()
    {

        $users = DB::table('users')
            ->whereNull('updated_at') //Mostra os users sem updated_at
            ->get();



        // ->where('id', 2)
        //->first(); //Traz as informações em forma de objeto
        // ->get() Traz as informações em um arrey

        // No Laravel, a função dd() significa Dump and Die.
        // - Dump: mostra o conteúdo da variável de forma estruturada e legível (arrays, objetos, coleções, etc.).
        // - Die: interrompe imediatamente a execução do código logo após mostrar os dados.
        dd($users);
    }

    //Função para carregar a ficha do user
    public function viewUser($id)
    {
        //Query que vai buscar o user que estou a clicar
        $user = DB::table('users')
            ->where('id', $id)
            ->first();


        // $user = User::where('id', $id)
        //     ->first();

        return view('users.view_user', compact('user'));
    }

    public function deleteUser($id){

        //Aqui podemos definir comportamentos para apagar tambem a chave estrangeira
        Db::table('tasks')
        ->where('user_id', $id)
        ->delete();

        Db::table('users')
        ->where('id', $id)
        ->delete();

        return back();
    }

    public function updateUser(Request $request){
        //dd($request->all());

         $request->validate([
            'name' => 'required|string|max:50',
        ]);

        DB::table('users')
        ->where('id', $request->id)
        ->update([
            'name' =>$request->name,
            'address' =>$request->address,
            'nif' =>$request->nif,
        ]);

        return redirect()->route('users.all')->with('message', 'User actualizado com sucesso');

    }
}
