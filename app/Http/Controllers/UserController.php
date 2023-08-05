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
        return view('user.siswa ', compact('siswa'));
    }

    public function add()
    {
        return view('user.siswa');
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'keanggotaan' => 1
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
