@extends('layouts.dashboard')
@section('title', 'Kelas')
@section('content')
<x-page-title>
    <x-slot name="title">Kelas</x-slot>
    <x-slot name="item">
        <li class="breadcrumb-item">Kelas</li>
        <li class="breadcrumb-item active">List Kelas</li>
    </x-slot>
</x-page-title>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Kelas</h3>
                <p class="card-title-desc">List Kelas</p>
                <div class="table-responsive"> 
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection