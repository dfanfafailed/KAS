<?php

namespace App\Http\Controllers;

use App\Models\Kas;
use App\Models\User;
use App\Models\Dana;
use App\Models\Kategori;
// use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class KasController extends Controller
{
    public function index()
    {
        $kas = Kas::all();
        $tanggal = \Carbon\Carbon::now()->format('Y-m-d');
        $bulan = \Carbon\Carbon::now()->format('F');
        return view('kas.index', compact(['kas','tanggal','bulan']));
    }

    public function add()
    {
        $tanggal = \Carbon\Carbon::now()->format('Y-m-d');
        $bulan = \Carbon\Carbon::now()->format('F');
        $kategori = Kategori::all();
        return view('kas.add', compact(['tanggal', 'bulan', 'kategori']));
    }

    public function create(Request $request)
    {

        Kas::create($request->except('_token'));
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

    public function update(Request $request)
    {
        $dana = Dana::find($request->id);
        $kas = Kas::find($dana->id_kas);

        $dana->dana_masuk = $request->kas_masuk;
        if ($dana->dana_masuk == $kas->uang) {
            $dana->status = 1;
        }

        $dana->save();

        return Redirect::route('kas.view', $kas->id);
    }

    public function view(Request $request)
    {
        $dana = DB::table('dana')
            ->join('users', 'users.id', '=', 'dana.id_siswa')
            ->join('kas', 'kas.id', '=', 'dana.id_kas')
            ->where('id_kas', $request->id)
            ->select('users.name', 'dana.*', 'kas.uang')
            ->get();

        return view('kas.view', compact('dana'));
    }
}
