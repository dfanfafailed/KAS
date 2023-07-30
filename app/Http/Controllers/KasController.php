<?php

namespace App\Http\Controllers;

use App\Models\Kas;
use App\Models\User;
use App\Models\Dana;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class KasController extends Controller
{
    public function index()
    {
        $tanggal = Carbon::now()->format('Y-m-d');
        $bulan = Carbon::now()->format('F');
        return view('kas.add', compact(['tanggal', 'bulan']));
    }

    public function create(Request $request)
    {
        // Kas::create($request->except('_token'));
        $nis = User::get('id');
        $idKas = Kas::get('id')->last();

        foreach ($nis as $item) {
            Dana::create([
                'id_kas' => $idKas->id,
                'id_siswa' => $item->id,
                'dana_masuk' => 0,
                'status' => 0,
            ]);
        }

        return 'succes!';
    }

    public function view(Request $request)
    {
        $dana = Dana::where('id_kas', $request->id)->get();

        return view('kas.view', compact('dana'));
    }
}
