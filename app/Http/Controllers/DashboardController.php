<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pembayaran;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $dana = 0;
    private $danaKeluar = 0;
    private $danaTersedia = 0;
    private $infaq = 0;

    public function index(DanaController $kas)
    {

        $this->dana = $kas->index()->dana;
        $dana = $this->dana;

        $this->danaKeluar = $kas->index()->danaKeluar;
        $danaKeluar = $this->danaKeluar;

        $this->danaTersedia = $kas->index()->danaTersedia;
        $danaTersedia = $this->danaTersedia;

        $this->infaq = $kas->index()->infaq;
        $infaq = $this->infaq;

        $title = 'Dashboard';

        $siswa = User::count('id');
        return view('content.dashboard', compact(['dana', 'siswa', 'danaKeluar', 'danaTersedia', 'infaq', 'title']));
    }
}
