@extends('layouts.auth')
@section('title', 'Login Siswa')
@section('content')
<div class="col d-none d-md-flex d-lg-flex justify-content-center bg-white">
    <img src="{{ asset('/images/siswa-removebg.png') }}" width="200px" height="500px" style="margin-top: 100px" alt="" class="w-75">
</div>
<div class="col d-flex align-items-center bg-white">
    <div class="p-4 w-100">
        <div class="d-flex justify-content-end">
            <a href="/login">Login Siswa <i class="mdi mdi-arrow-right"></i></a>
        </div>
        
        <div class="bg-white d-flex flex-column pt-4 pb-0">
            <h1><strong>Selamat Datang</strong></h1>
            <p>Login untuk melanjutkan</p>
        </div>

        <div class="pt-4">
            <div class="form-group">
                <label for="nis">NIS</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nomor Induk Siswa">
                <span class="invalid-feedback" role="alert">
                    <strong>NIS</strong>
                </span>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Password">
                <span class="invalid-feedback" role="alert">
                    <strong>Password</strong>
                </span>
            </div>
            <div class="mt-3">
                <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In</button>
            </div>
        </div>
    </div>
</div>
@endsection
