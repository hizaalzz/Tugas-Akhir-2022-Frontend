@extends('layouts.dashboard')
@section('title', 'Level')
@section('content')
<x-page-title>
    <x-slot name="title">Level</x-slot>
    <x-slot name="item">
        <li class="breadcrumb-item">Level</li>
        <li class="breadcrumb-item active">List Level</li>
    </x-slot>
</x-page-title>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Level</h3>
                <p class="card-title-desc">Level yang tersedia</p>
                <div class="table-responsive"> 
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection