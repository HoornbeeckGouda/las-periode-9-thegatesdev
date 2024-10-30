<?php

namespace App\Http\Controllers;

use App\Models\Group;

class GroupController extends Controller
{
    public function index()
    {
        $list = Group::all();
        return view('app.groups.index', compact('list'));
    }
}
