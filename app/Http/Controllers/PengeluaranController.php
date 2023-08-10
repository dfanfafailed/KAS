<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Dana;
use App\Models\User;
use App\Models\Pembayaran;
use App\Models\Pengeluaran;
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
        $dana = Dana::sum('dana_masuk') - Pengeluaran::sum('uang');
        if ($request->uang > $dana) {
          
            return redirect('/pengeluaran')->with('failed', 'fail');
        }

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
