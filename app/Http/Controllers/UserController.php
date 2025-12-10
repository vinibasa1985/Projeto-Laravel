<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function addUser()
    {
        $pageAdmin = 'Vinicius';
        return view('users.add_users', compact('pageAdmin'));
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


        return view('users.allUsers', compact('cesaeInfo', 'students'));
    }
}
