<?php

namespace App\Http\Controllers;

use App\Medicamentos;
use Illuminate\Http\Request;

class MedicamentosController extends Controller
{
    public function index(Request $request)
    {
        return Medicamentos::select("medicamentos.*")
        ->where(function($query) use ($request){
            if(isset($request->valor)){
                $query->whereRaw("CONCAT(medicamentos.producto,medicamentos.expediente) like ?","%$request->valor%");
            }
        })
        ->paginate(100);
    }
}
