<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    function login(Request $req)
    {
        $user = User::where(['email'=>$req->email])->first();
        if(!$user || !hash::check($req->password,$user->password))
        {
            return "Email ou senhas erradas";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
}
