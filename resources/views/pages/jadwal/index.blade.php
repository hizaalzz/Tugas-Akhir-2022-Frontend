@extends('layouts.dashboard')
@section('title', 'Jadwal')
@section('content')
<x-page-title>
    <x-slot name="title">Jadwal</x-slot>
    <x-slot name="item">
        <li class="breadcrumb-item">Jadwal</li>
        <li class="breadcrumb-item active">List jadwal ujian</li>
    </x-slot>
</x-page-title>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between flex-wrap">
                    <div>
                        <h3 class="card-title">
                            Jadwal 
                        </h3>
                        <p class="card-title-desc">List Jadwal</p>
                    </div>
                </div>
                <div class="table-responsive"> 
                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection