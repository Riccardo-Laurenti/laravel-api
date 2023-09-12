@extends('layouts.app')
@section('title', 'Create Post')

@section('content')
    <header class="d-flex justify-content-between align-items-center container">
        <h4>MODIFICA IL POST</h4>
        <a href="{{ route('admin.project.index') }}" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left me-2"></i>
            torna indietro
        </a>
    </header>
    <hr>
    @include('includes.project.form')
@endsection

@section('scripts')
    @vite('resources/js/slug-generator.js')
    {{-- @vite('resources/js/image-previewer.js') --}}
@endsection
