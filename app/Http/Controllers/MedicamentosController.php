<?php

namespace App\Http\Controllers;

use App\Medicamentos;
use Illuminate\Http\Request;

class MedicamentosController extends Controller
{
    public function index(Request $request)
    {
        return Medicamentos::select("medicamentos.*")
        ->paginate(100);
    }
}
