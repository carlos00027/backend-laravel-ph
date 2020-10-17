<?php

namespace App\Http\Controllers;

use App\Clientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
{
    public function store(Request $request)
    {
        return DB::transaction(function() use ($request){
            return Clientes::create($request->all());
        },5);
    }
}
