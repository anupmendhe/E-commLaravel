<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    //
    public function login(request $req)
    {
         $user = User::where(['email' =>$req->email])->first();
   
        if(!$user || !Hash::check($req->password, $user->password))
        {
            echo "user and password not matched";
        }
        else
        {

            $req->session()->put('user',$user);
            return redirect("/");
        }

        
    }


}
