@extends('layouts.dashboard')
@section('title', 'Murid')
@section('content')
<x-page-title>
    <x-slot name="title">Murid</x-slot>
    <x-slot name="item">
        <li class="breadcrumb-item">Murid</li>
        <li class="breadcrumb-item active">List Murid</li>
    </x-slot>
</x-page-title>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Murid</h3>
                <p class="card-title-desc">List murid</p>
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