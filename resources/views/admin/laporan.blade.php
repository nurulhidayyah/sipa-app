@extends('layouts.dashboard')

@section('title')
    SIPA | Laporan
@endsection

@section('container')
    <!-- Page Heading -->
    <h2 class="fas fa-table">Tabel Laporan</h2>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <a href="/admin/generate" class="btn btn-primary mb-2" target="blank">Generate Laporan</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Anggota</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No Telp</th>
                            <th>email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($laporans as $laporan)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $laporan->user->id }}</td>
                                <td>{{ $laporan->user->nama }}</td>
                                <td>{{ $laporan->user->alamat }}</td>
                                <td>{{ $laporan->user->phone }}</td>
                                <td>{{ $laporan->user->email }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
