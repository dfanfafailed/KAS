<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        
        Kategori::create($request->except('_token'));

        return 'ok';
    }
}
