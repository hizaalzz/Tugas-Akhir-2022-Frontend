@extends('layouts.dashboard')
@section('title', 'Guru')
@section('content')
<x-page-title>
    <x-slot name="title">Guru</x-slot>
    <x-slot name="item">
        <li class="breadcrumb-item">Guru</li>
        <li class="breadcrumb-item active">List Guru</li>
    </x-slot>
</x-page-title>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Guru</h3>
                <p class="card-title-desc">List guru</p>
                <div class="table-responsive"> 
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection