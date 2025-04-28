<?php

namespace App\Http\Controllers;

use App\Models\images;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index()
    {
        return view('index', [  
            'gallery' => images::all()
    ]);
    }
}
