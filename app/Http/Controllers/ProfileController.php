<?php

namespace App\Http\Controllers;

use App\Models\Profile;

class ProfileController extends Controller
{
    public function index()
    {
        $list = Profile::all();
        return view('app.profiles.index', compact('list'));
    }
}
