<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GiftController extends Controller
{
    public function allGifts(){
        $gifts = DB::table('gifts')
        ->join('users', 'users.id', 'gifts.user_id')
        ->select('gifts.*', 'users.name as usname')
        ->get();

        //  dd($gifts);

        return view('gifts.allGifts', compact('gifts'));

    }

    //Função para carregar a ficha da Gifts
    public function viewGifts($id)
    {
        //Query que vai buscar o user que estou a clicar
        $gifts = DB::table('gifts')
            ->where('id', $id)
            ->first();


        // $tasks = Tasks::where('id', $id)
        //     ->first();

        return view('gifts.view_gift', compact('gifts'));
    }

    public function deleteGifts($id){

        //Aqui podemos definir comportamentos para apagar tambem a chave estrangeira
        DB::table('gifts')
        ->where('id', $id)
        ->delete();



        return back();
    }




}
