<?php

namespace App\Http\Controllers;

use App\Models\Dana;
use App\Models\Kas;
use Illuminate\Http\Request;

class DanaController extends Controller
{
    public function index()
    {
        $kas = Kas::all();

        return view('dana.index', compact('kas'));
    }
}
