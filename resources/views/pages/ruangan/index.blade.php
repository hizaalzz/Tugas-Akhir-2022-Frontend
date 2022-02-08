@extends('layouts.dashboard')
@section('title', 'Ruangan')
@section('content')
<x-page-title>
    <x-slot name="title">Ruangan</x-slot>
    <x-slot name="item">
        <li class="breadcrumb-item">Ruangan</li>
        <li class="breadcrumb-item active">List Ruangan</li>
    </x-slot>
</x-page-title>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Ruangan</h3>
                <p class="card-title-desc">List Ruangan</p>
                <div class="table-responsive"> 
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection