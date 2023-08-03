<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class KartuAnggotaController extends Controller
{
    public function index(User $user)
    {
        $gambar = asset('storage/' . $user->pas_foto);
        $pdf = Pdf::loadView('pdf.kta', [
            'data' => $user,
            'img' => $gambar
        ]);
        return $pdf->stream();
    }
}
