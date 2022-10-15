<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('Register.index');
    }

    public function store(Request $request)
    {
        $request->validate([
        'name'=>'required|max:225',

        ]);
    }
}

