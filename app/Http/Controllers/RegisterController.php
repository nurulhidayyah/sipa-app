<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'email' => ['required', 'unique:users', 'email'],
            'phone' => 'required|min:10|max:15',
            'foto_ktp' => 'required|image|file|max:1024',
            'pas_foto' => 'required|image|file|max:1024',
            'password' => 'required|min:3|max:255'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['foto_ktp'] = $request->file('foto_ktp')->store('lampiran');
        $validatedData['pas_foto'] = $request->file('pas_foto')->store('lampiran');
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('success', 'Registration successfull! Please login');

        return redirect('/')->with('success', 'Registrasi berhasil! Silahkan login');
    }
}
