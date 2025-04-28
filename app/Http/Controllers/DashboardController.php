<?php

namespace App\Http\Controllers;
use App\Models\images;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        return view('dashboard', [
            'gallery' => images::all()
    ]);
    }
}
