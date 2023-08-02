<?php

namespace App\Http\Controllers;

use App\Models\Dana;
use App\Models\Kas;
use App\Models\Pembayaran;
use App\Models\Pengeluaran;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DanaController extends Controller
{
    private $danaTersedia = 0;

    public function index()
    {
        $dana = DB::table('dana')
            ->join('kas', 'kas.id', '=', 'dana.id_kas')
            ->where('kas.id_kategori', '=', 1)
            ->sum('dana.dana_masuk');

        $infaq = DB::table('dana')
            ->join('kas', 'kas.id', '=', 'dana.id_kas')
            ->where('kas.id_kategori', '=', 2)
            ->sum('dana.dana_masuk');

        $bayar = Pembayaran::sum('uang');

        $danaMasuk = Dana::sum('dana_masuk');
        $danaKeluar = Pengeluaran::sum('uang');
        $this->danaTersedia = $dana - $danaKeluar;
        $this->danaTersedia += $bayar;
        $danaTersedia = $this->danaTersedia;

        return view('dana.add', compact(['danaKeluar', 'danaTersedia', 'dana', 'infaq']));
    }

    public function add(int $id)
    {
        $tanggal = Carbon::now()->format('Y-m-d');
        $pengeluaran = Pengeluaran::find($id);
        $nama = $pengeluaran->user->name;
        return view('dana.add', compact(['nama', 'tanggal', 'pengeluaran']));
    }

    public function store(Request $request)
    {
        $bayar = Pembayaran::create($request->except('_token'));
    }
}
