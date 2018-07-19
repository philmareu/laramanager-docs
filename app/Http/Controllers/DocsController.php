<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocsController extends Controller
{
    public function index($page = 'introduction')
    {
        return view('docs.index')->with('page', $page);
    }
}
