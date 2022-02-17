@extends('layouts.dashboard')
@section('title', 'Admin')
@section('content')
<x-page-title>
    <x-slot name="title">Admin</A></x-slot>
    <x-slot name="item">
        <li class="breadcrumb-item">Admin</li>
        <li class="breadcrumb-item active">List Admin</li>
    </x-slot>
</x-page-title>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Admin</h3>
                <p class="card-title-desc">List admin</p>
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