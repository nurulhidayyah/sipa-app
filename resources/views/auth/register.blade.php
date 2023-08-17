@extends('layouts.auth')
@section('title')
    SIPA - Registrasi
@endsection

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card border-0 shadow-lg my-5">
                <div class="card-body p-0 ">
                    <!-- Nested Row within Card Body -->
                    <div class="row justify-content-center">
                        <div class="col">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                </div>
                                <form class="user" method="post" action="/register" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col mb-3 mb-sm-0">
                                            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                                id="nama" name="nama" placeholder="Nama Lengkap"
                                                value="{{ old('nama') }}">
                                            @error('nama')
                                                <small class="text-danger pl-3">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col mb-3 mb-sm-0">
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                id="email" name="email" placeholder="Email"
                                                value="{{ old('email') }}" required>
                                            @error('email')
                                                <small class="text-danger pl-3">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col mb-3 mb-sm-0">
                                            <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                                id="phone" name="phone" placeholder="No Telp"
                                                value="{{ old('phone') }}" required>
                                            @error('phone')
                                                <small class="text-danger pl-3">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col mb-3 mb-sm-0">
                                            <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                                id="alamat" name="alamat" placeholder="Alamat"
                                                value="{{ old('alamat') }}" required>
                                            @error('alamat')
                                                <small class="text-danger pl-3">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="foto_ktp">Lampiran 1</label>
                                        <img class="img-fluid img-preview1 mb-3 col-sm-5">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input @error('foto_ktp') is-invalid @enderror" id="foto_ktp" name="foto_ktp" onchange="previewImage1()">
                                            <label class="custom-file-label" for="foto_ktp">Foto KTP</label>
                                            @error('foto_ktp')
                                                <small class="text-danger pl-3">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pas_foto">Lampiran 2</label>
                                        <img class="img-fluid img-preview2 mb-3 col-sm-5">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input @error('pas_foto') is-invalid @enderror" id="pas_foto" name="pas_foto" onchange="previewImage2()">
                                            <label class="custom-file-label" for="pas_foto">Pas Foto Ukuran 2x3</label>
                                            @error('pas_foto')
                                                <small class="text-danger pl-3">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col mb-3 mb-sm-0">
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror" id="password"
                                                name="password" placeholder="Password" required>
                                            @error('password')
                                                <small class="text-danger pl-3">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Register Account
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="/">Already have an account? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
