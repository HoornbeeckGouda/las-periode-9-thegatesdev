<?php

namespace App\Http\Controllers;

use App\Models\Document;

class DocumentController extends Controller
{
    public function index()
    {
        $list = Document::all();
        return view('app.documents.index', compact('list'));
    }
}
