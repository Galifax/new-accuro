<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModelController extends Controller
{
    public function index()
    {
        return view('3d-models.index');
    }
}
