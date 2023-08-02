<?php

namespace App\Http\Controllers;

use App\Models\Pengeluaran;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    public function index()
    {
        $pengeluaran = Pengeluaran::all();
        return view('pengeluaran.index', compact('pengeluaran'));
    }

    public function add()
    {
        $siswa = User::all();
        $tanggal = Carbon::now()->format('Y-m-d');
        return view('pengeluaran.add', compact(['tanggal', 'siswa']));
    }


    public function store(Request $request)
    {
        Pengeluaran::create($request->except('_token'));
        return 'OK';
    }
}
