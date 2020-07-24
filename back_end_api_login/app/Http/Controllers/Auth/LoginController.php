<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function login(Request $request){
        if(Auth::attempt(['name' => $request->name, 'password' => $request->password])){
             return response()->json(Auth::user()->id, 200);
        }else{
            return 400;
        }
    }

}
