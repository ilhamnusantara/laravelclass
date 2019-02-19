<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::paginate(10);
        return view('users.users',[
            'title'=> 'List User',
            'users' => $user
        ]);
    }

    public function show($id)
    {
        $user = User::find($id);


        return view('users.userShow',[
            'title' => 'User Profile',
            'user' => $user
    ]);
    }
}
