<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilController extends Controller
{
    public function home(){

     $surname = 'Barbosa Santos';
     $name='Vinicius';

    return view('utils.home',compact('surname', 'name'));

    }

}
