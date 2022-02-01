@extends('layouts.dashboard')
@section('title', 'Penilaian')
@section('content')
<x-page-title>
    <x-slot name="title">Penilaian</x-slot>
    <x-slot name="item">
        <li class="breadcrumb-item">Penilaian</li>
        <li class="breadcrumb-item active">Pilih Jadwal</li>
    </x-slot>
</x-page-title>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Penilaian</h3>
                <p class="card-title-desc">Pilih kelas untuk menampilkan hasil nilai ujian</p>
                <div class="table-responsive">
                    <table class="table" id="jadwal-table">
                        <thead>
                            <tr>
                                <th>Kelas</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>VII A</td>
                                <td>
                                    <a href="" class="btn btn-primary btn-sm">
                                         Buka <i class="mdi mdi-share"></i> 
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection