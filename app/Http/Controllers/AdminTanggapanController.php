<?php

namespace App\Http\Controllers;

use App\Models\Tanggapan;
use App\Models\User;
use Illuminate\Http\Request;

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
                'status' => 'required'
            ]);

            $validatedData['status'] = $request->status;
            User::where('id', $request->user_id)->update($validatedData);
        }

        return redirect('/admin/verifikasi')->with('success', 'Pendaftar berhasil diverifikasi');
    }
}
