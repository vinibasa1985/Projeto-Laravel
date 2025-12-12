

<!-- Abaixo indica que neste ficheiro estamos usando php (teg abaixo) -->
<?php

use App\Http\Controllers\UserController;

use App\Http\Controllers\UtilController;
// O sistema de rotas aqui ja esta pronto diferente do React
use Illuminate\Support\Facades\Route; //Imports do Laravel (use substitui o import)

// Route::get('/', function () {     //Rota original quando inicia o programa Laravel
//     return view('welcome');       //welcome esta dentro de uma pasta
// })->name('utils.welcome');

//Substituimos welcome por utils.home lembrar sempre que home esta dentro da pasta utils por isso usamos utils.home
Route::get('/', [UtilController::class,'home'])


     //código fictício que vem de uma consulta a base de dados
    //  surname = 'Barbosa Santos';
    //  name='Vinicius';

    // return view('utils.home',compact('surname'));
->name('utils.welcome');

//Criar uma nova rota chamada hello - esta mesma rota serve para adicionar outros caminhos
Route::get('/hello', function () {
      $myName= 'Vinicius';
      $myPass= 1234455; //Se não retornarmos não fica visível para o usuário

      $myName= 'Claudio'; //Leitura sempre do ultimo nome

    return "<h1>Olá Mundo $myName</h1>";
})->name('utils.hello');

//Criar uma rota que quando chamado recebe o nome do sitio que estou a clicar neste caso se não chamar o $name a página apresenta erro
Route::get('/turma/{name}', function ($name) {
    //ir a base de dados e buscar toda a info da turma
    //Usamos aspas "" para processar o $name
    return "<h1>Turma: $name</h1>";
});


//Rota para adicionar utilizadores
Route::get('/adicionarusers', [UserController::class, 'addUser'])->name('users.add');


//função raw que insere um user na Base de dados (teste do dbquery builder sem frontend)
Route::get('/insertintodb', [UserController::class, 'insertUserIntoDB']);

Route::get('/updateintodb', [UserController::class, 'updateUserIntoDB']);

Route::get('/deleteuser', [UserController::class, 'deleteUserFromDB']);

Route::get('/getusers', [UserController::class, 'selectUsersFromDB']);



//Criar uma rota para mostrar todos os users
Route::get('/allusers', [UserController::class, 'allUsers'])->name('users.all');



// Route::get('/add-users', function () {
    // return view('users.add-users');
    // return view('users.add-users');  view é o caminho(função do Laravel) serve para retornar uma página editável mas podemos usar o <h1>Teste</h1> por exemplo para testar a página
// })->name('users.add');
// ->name('users.add'); serve para o programador definirmos o nome da rota o get('/add-users' pode ser alterado o nome visualmente pelo cliente


//Criar uma rota de págida de ERRO - sempre abaixo de todas
Route::fallback(function() {
    //clicas '' se usa quando não temos nada para processar
    return view('utils.fallback');

});


