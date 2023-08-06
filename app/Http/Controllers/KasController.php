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
    private $title = 'Kas';

    public function index()
    {
        $kas = Kas::all();
        $tanggal = \Carbon\Carbon::now()->format('Y-m-d');
        $bulan = \Carbon\Carbon::now()->format('F');
        $kategori = Kategori::all();
        $title = $this->title;
        return view('kas.index', compact(['kas', 'tanggal', 'bulan', 'kategori', 'title']));
    }

    public function add()
    {
        $tanggal = \Carbon\Carbon::now()->format('Y-m-d');
        $bulan = \Carbon\Carbon::now()->format('F');
        $kategori = Kategori::all();
        $title = $this->title;
        return view('kas.add', compact(['tanggal', 'bulan', 'kategori', 'title']));
    }

    public function create(Request $request)
    {

        if ($request->id_kategori != 1) {
            Kas::create([
                'id_kategori' => $request->id_kategori,
                'tanggal' => $request->tanggal,
                'bulan' => $request->bulan,
                'uang' => 0
            ]);
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
        }

        $request->validate([
            'uang' => 'integer|min_digits:3'
        ]);

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

        return redirect('/kas');
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
        $kas = Kas::find($request->id);
        $dana = DB::table('dana')
            ->join('users', 'users.id', '=', 'dana.id_siswa')
            ->join('kas', 'kas.id', '=', 'dana.id_kas')
            ->where('id_kas', $request->id)
            ->select('users.name', 'dana.*', 'kas.uang', 'kas.id_kategori')
            ->get();
        $title = $this->title;
        return view('kas.view', compact('dana', 'kas', 'title'));
    }
}
