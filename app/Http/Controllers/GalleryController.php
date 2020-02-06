<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $model = Gallery::get();
        return view('gallery.index', compact('model'));
    }
}
