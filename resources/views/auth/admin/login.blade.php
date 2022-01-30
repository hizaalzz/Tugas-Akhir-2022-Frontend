@extends('layouts.auth')
@section('title', 'Login Guru')
@section('content')
<div class="col d-flex align-items-center bg-white">
    <div class="p-4 w-100">
        <a href="/loginsiswa"><i class="mdi mdi-keyboard-backspace"></i> Login Siswa</a>

        <div class="bg-white d-flex flex-column pt-4 pb-0">
            <h1><strong>Login Guru</strong></h1>
            <p>Login untuk melanjutkan</p>
        </div>
        <div class="pt-4">
            <div class="form-group">
                <label for="Email">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Email">
                <span class="invalid-feedback" role="alert">
                    <strong>Email</strong>
                </span>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Password">
                <span class="invalid-feedback" role="alert">
                    <strong>Password</strong>
                </span>
            </div>
            <br>
            <div class="mt-3">
                <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In</button>
            </div>

        </div>
    </div>
</div>
<div class="col d-none d-md-flex d-lg-flex justify-content-center bg-white">
    <img src="{{ asset('/images/guru.jpg') }}" width="200px" height="500px" style="margin-top: 100px" alt="" class="w-75">
</div>
@endsection
