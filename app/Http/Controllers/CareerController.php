<?php

namespace App\Http\Controllers;

use App\Models\Career;

class CareerController extends Controller
{
    public function index()
    {
        $list = Career::all();
        return view('app.careers.index', compact('list'));
    }
}
