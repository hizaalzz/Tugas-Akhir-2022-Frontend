@extends('layouts.dashboard')
@section('title', 'Mata Pelajaran')
@section('content')
<x-page-title>
    <x-slot name="title">Mata Pelajaran</x-slot>
    <x-slot name="item">
        <li class="breadcrumb-item">Mata Pelajaran</li>
        <li class="breadcrumb-item active">List Mata Pelajaran</li>
    </x-slot>
</x-page-title>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Mata Pelajaran</h3>
                <p class="card-title-desc">List Mata Pelajaran</p>
                <div class="table-responsive"> 
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection