<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $list = User::all();
        return view('app.users.index', compact('list'));
    }
}
