<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function index(User $user)
    {

        return view('profiles/index', compact('user'));
    }

    public function edit($user){

        return view('profiles/edit',compact('user'));
    }

}
