@extends('layouts.dashboard')

@section('title')
    SIPA | Verifikasi
@endsection

@section('container')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Selamat Datang {{ auth()->user()->nama }}</h1>
    <h1 class="h3 mb-4 mt-3 text-gray-800">Data Calon Anggota</h1>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (!$users->isEmpty())
        <div class="row">

            <?php foreach ($users as $user) : ?>
            <div class="col-md-3">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">{{ $user->nama }}</h6>
                    </div>
                    <div style="overflow: auto; height: 150px;">
                        <img src="{{ asset('storage/' . $user->pas_foto) }}" class="card-img-top">
                    </div>
                    <div class="card-body">
                        <span class="text-dark">Email :</span>
                        <p>{{ $user->email }}</p>
                        <span class="text-dark">No Telp :</span>
                        <p>{{ $user->phone }}</p>
                        <span class="text-dark">Tgl Pendaftaran :</span>
                        <p>{{ $user->created_at->format('d-m-Y') }}</p>
                    </div>
                    <div class="text-center mb-2">
                        <form action="/admin/verifikasi/{{ $user->id }}">
                            <input type="hidden" name="id" id="id" value="{{ $user->id }}">
                            <button type="submit" class="btn btn-primary">Lihat Detail</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    @else
        <div class="text-center">Belum Ada Pendaftar</div>
    @endif
@endsection
