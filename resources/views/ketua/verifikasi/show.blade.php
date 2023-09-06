@extends('layouts.dashboard')

@section('title')
    SIPA | Pendaftaran Masuk
@endsection

@section('container')
    <!-- Page Heading -->
    <h1 class="h3 mb-3 text-gray-800">Selamat Datang {{ auth()->user()->nama }}</h1>
    <a href="/ketua/verifikasi" class="btn btn-dark"><i class="fas fa-arrow-left"></i></a>

    <!-- Page Heading -->
    <h1 class="h3 mb-4 mt-3 text-gray-800">Data Pendaftar</h1>

    <div class="row">

        @error('status')
            <div class="alert alert-danger alert-dismissible fade show col-lg-8" role="alert">
                {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @enderror
    </div>

    <div class="row">
        <div class="card no-border mb-3 col-lg-8">
            <div class="justify-content-center">
                <div class="">
                    <h3 class="mt-2 mb-2"></h3>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-6">
                    <label for="foto_ktp">Foto KTP</label>
                    <img src="{{ asset('storage/' . $user->foto_ktp) }}" alt="" class="img-thumbnail">
                </div>
                <div class="col-md-6">
                    <label for="pas_foto">Pas Foto</label>
                    <img src="{{ asset('storage/' . $user->pas_foto) }}" alt="" class="img-thumbnail">
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <div class="card-body">
                        <h5 class="card-title">Tgl Daftar : {{ $user->created_at->format('d-m-Y') }}</h5>
                        <p class="card-text">Email : {{ $user->email }}</p>
                        <p class="card-text">No Telepon : {{ $user->phone }}</p>
                        <p class="card-text">Alamat : {{ $user->alamat }}</p>
                        <p class="card-text">Status : {{ $user->is_active }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h1 class="h3 mb-4 text-gray-800">Masukan Tanggapan Anda</h1>

    <div class="row" style="margin-bottom: 200px;">
        <div class="col-lg-6">

            <form action="/ketua/verifikasi/{{ $user->id }}" method="post">
                @csrf
                @method('put')
                <input type="hidden" name="user_id" value="{{ $user->id }}">

                <label for="">Status Tanggapan</label>
                <div class="form-group">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="status-setuju" value="4">
                        <label class="form-check-label" for="status-setuju">Setuju</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="status-tolak" value="3">
                        <label class="form-check-label" for="status-tolak">Tolak</label>
                    </div>

                </div>

                <button type="submit" class="btn btn-primary">Verifikasi</button>
            </form>
        </div>

    </div>
@endsection
