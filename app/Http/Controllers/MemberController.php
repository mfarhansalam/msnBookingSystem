<?php

namespace App\Http\Controllers;

use App\Models\Court;
use Illuminate\Http\Request;

class MemberController extends Controller
{
   

    public function login(){
        return view('member.login');
    }

    public function register(){
        return view('member.register');
    }
}
