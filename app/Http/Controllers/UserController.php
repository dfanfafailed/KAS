<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Nette\Utils\Json;

class UserController extends Controller
{
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

        return view('user.edit', compact('siswa'));
    }

    public function update(Request $request, int $id)
    {
        $user = User::find($id);
        $user->update($request->except('_token'));

        return redirect('/user')->with('alert', 'Behasil di edit');
    }
}
