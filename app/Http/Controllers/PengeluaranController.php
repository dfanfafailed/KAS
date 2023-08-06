<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Pengeluaran;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengeluaranController extends Controller
{
    public function index()
    {
        $siswa = User::all();
        $tanggal = Carbon::now()->format('Y-m-d');
        $pengeluaran = DB::table('pengeluaran')
            ->leftJoin('pembayaran', 'pengeluaran.id', '=', 'pembayaran.id_pengeluaran')
            ->leftJoin('users', 'pembayaran.id_siswa', '=', 'users.id')
            ->select('pengeluaran.*', 'pembayaran.uang_kembali', 'users.name')
            ->get();
        $title = 'Pengeluaran';
        return view('pengeluaran.index', compact('pengeluaran', 'tanggal', 'siswa', 'title'));
    }

    public function add()
    {
        $siswa = User::all();
        $tanggal = Carbon::now()->format('Y-m-d');
        return view('pengeluaran.add', compact(['tanggal', 'siswa']));
    }


    public function store(Request $request)
    {
        $pengeluaran = Pengeluaran::create($request->except('_token'));
        if ($pengeluaran->id_siswa != NULL) {
            Pembayaran::create([
                'id_pengeluaran' => $pengeluaran->id,
                'id_siswa' => $pengeluaran->id_siswa,
                'tanggal' => $pengeluaran->tanggal,
                'uang_kembali' => 0,
            ]);
        }
        return redirect('/pengeluaran')->with('success', 'Berhasil');
    }
}
