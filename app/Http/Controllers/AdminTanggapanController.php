<?php

namespace App\Http\Controllers;

use App\Models\Tanggapan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\PermohonanDitolak;


class AdminTanggapanController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'max:255',
            'tanggapan' => 'max:255'
        ]);


        $validatedData['user_id'] = $request->user_id;

        $tanggapan = Tanggapan::create($validatedData);

        if ($tanggapan) {
            $validatedData = $request->validate([
                'status' => 'required',
            ]);

            $validatedData['status'] = $request->status;
            // Jika permohonan ditolak
            if ($validatedData['status'] == 3) {
                // Kirim email pemberitahuan
                Mail::to($tanggapan->user->email)->send(new PermohonanDitolak($request->tanggapan));
            }
            $validatedData['is_active'] = 'Anggota';
            User::where('id', $request->user_id)->update($validatedData);
        }

        return redirect('/admin/verifikasi')->with('success', 'Pendaftar berhasil diverifikasi');
    }
}
