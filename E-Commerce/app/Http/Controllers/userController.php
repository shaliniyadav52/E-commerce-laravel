<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function login(Request $req){
        $user= User::where(['email'=>$req->email])->first();//to get first data
      //  return $user->password;
        if(!$user|| !Hash::check($req->password, $user->password)){
            return "Username or password is not matched";
        }
        else{
            $req->session()->put('user', $user);
            return redirect('/');
        }
    }
}
