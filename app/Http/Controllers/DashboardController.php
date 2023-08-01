<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Dana;
use App\Models\Kas;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $dana = Dana::sum('dana_masuk');
        $siswa = User::count('id');

        return view('content.dashboard', compact(['dana', 'siswa']));
        
    }
}
