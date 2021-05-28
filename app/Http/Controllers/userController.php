<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    //
    function login(Request $req){
        $user= User::where(['email'=>$req->email])->first();
        if(!$user || Hash::check($req->password, $user->password)){
            return "user name or password not matched";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
}
