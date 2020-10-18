<?php

namespace App\Http\Controllers;

use App\Clientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
{
    public function index(Request $request)
    {
        return Clientes::select("clientes.*")
        ->where(function($query) use ($request){
            if(isset($request->valor)){
                $query->whereRaw("CONCAT(clientes.nombres,clientes.correo,clientes.direccion,clientes.documento) like ?","%$request->valor%");
            }
        })
        ->paginate(10);
    }
    public function store(Request $request)
    {
        return DB::transaction(function() use ($request){
            return Clientes::create($request->all());
        },5);
    }
    public function destroy($id)
    {
        return DB::transaction(function() use ($id) {
            return Clientes::find($id)->delete();
        },5);
    }
    public function update(Request $request,$id)
    {
        return DB::transaction(function() use ($request,$id){
            $cliente = Clientes::find($id);
            $cliente->fill($request->all());
            $cliente->update();
            return $cliente;
        },5);
    }
}
