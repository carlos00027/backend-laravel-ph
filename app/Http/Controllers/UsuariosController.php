<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index(Request $request)
    {
        return User::select("users.*")
        ->with([ "rol" ])
        ->leftJoin("roles as r", "users.rol_id","r.id")
        ->where(function($query) use ($request){
            if(isset($request->valor)){
                $query->whereRaw("CONCAT(users.name,users.email,r.name) like ? ","%$request->valor%");
            }
        })
        ->paginate(10);
    }

    public function update(Request $request,$id)
    {
        $u = User::find($id);
        $u->fill($request->only("name","email","rol_id"));
        if(isset($request->password)){
            $u->password = bcrypt($request->password);
        }
        $u->update();
        return $u;
    }

    public function destroy($id)
    {
        return User::find($id)->delete();
    }
}
