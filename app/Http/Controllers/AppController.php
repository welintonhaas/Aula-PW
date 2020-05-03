<?php

namespace App\Http\Controllers;

use App\Usuario\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{

    function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
