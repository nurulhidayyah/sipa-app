<?php

namespace App\Http\Controllers;

use App\Models\Tanggapan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminExportPdf extends Controller
{
    public function index()
    {
        $user = Tanggapan::all();
        $pdf = Pdf::loadView('pdf.laporan', [
            'data' => $user,
        ]);
        return $pdf->stream();
    }
}
