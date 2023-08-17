<?php

namespace App\Http\Controllers;

use App\Models\Tanggapan;
use Illuminate\Http\Request;

class AdminLaporanController extends Controller
{
    public function index()
    {
        return view('admin.laporan', [
            'laporans' => Tanggapan::all()
        ]);
    }
}
