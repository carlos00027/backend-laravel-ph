<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registrar(Request $request)
    {
        $request["password"] = bcrypt($request->password);
        return User::create($request->all());
    }
}
