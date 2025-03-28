@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Kategori')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Kategori')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Manage Kategori
            <a href="/kategori/create" class="btn btn-primary float-right">Add Kategori</a>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            {{ $dataTable->table() }}
        </div>
    </div>
</div>
@endsection

@push('scripts')
    {{ $dataTable->scripts() }}
@endpush
