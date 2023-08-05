<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $siswa = User::all();
        return view('user.siswa ', compact('siswa'));
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

        return 'added';
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
        $user->save();
    }
}
