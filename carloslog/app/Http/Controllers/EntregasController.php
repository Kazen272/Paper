<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntregasController extends Controller
{
    public function entregas(){
        return view('entregas');
    }
}
