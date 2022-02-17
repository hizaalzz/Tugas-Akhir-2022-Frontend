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
                <div class="section-body">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-12">
                            <div class="card">
        
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered data" id="add-row">
                                            <thead>
                                                <tr>
                                                <th>No</th>
                                                <th>Nama </th>
        
        
                                                <th>Email</th>
        
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>
                                        </table>
        
                                    </div>
                                </div>
        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('script-addon')
<script>
    $(document).ready(function () {
        $('.data').dataTable();
    });
</script>
@endpush