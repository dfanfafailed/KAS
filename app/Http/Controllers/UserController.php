<?php

namespace App\Http\Controllers;

use App\Models\Kas;
use App\Models\User;
use Nette\Utils\Json;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    private $title = 'Kas';

    public function index()
    {
        $siswa = User::all();
        $title = 'Siswa';
        return view('user.siswa ', compact(['siswa', 'title']));
    }

    public function add()
    {
        return view('user.add');
    }

    public function store(Request $request)
    {
       
        User::create([
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'keanggotaan' => $request->keanggotaan
        ]);

        return redirect('/user');
    }

    public function edit(int $id)
    {
        $siswa = User::find($id);
        $title = 'Siswa';

        return view('user.edit', compact('siswa', 'title'));
    }

    public function update(Request $request, int $id)
    {
        $user = User::find($id);
        $user->update($request->except('_token'));

        return redirect('/user')->with('alert', 'Behasil di edit');
    }
    function viewKas() {
        $kas = Kas::all();
        $title = $this->title;

        return view('welcome',compact('kas','title'));
    }

    function detailKas(Request $request) {
        $kas = Kas::find($request->id);
        $dana = DB::table('dana')
            ->join('users', 'users.id', '=', 'dana.id_siswa')
            ->join('kas', 'kas.id', '=', 'dana.id_kas')
            ->where('id_kas', $request->id)
            ->select('users.name', 'dana.*', 'kas.uang', 'kas.id_kategori')
            ->get();
        $title = $this->title;

        return view('viewkas',compact(['kas','dana', 'title']));
    }
}
