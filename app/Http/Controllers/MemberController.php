<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(){
        return view('member.index');
    }

    public function profile(){
        return view('member.profile');
    }

    public function login(){
        return view('member.login');
    }

    public function register(){
        return view('member.register');
    }
}
