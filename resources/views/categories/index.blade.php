@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/categories.css') }}">
@endpush

@section('content')
    <div class="container py-5">
        <!-- Header Section -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="text-center mb-4">
                    <h1 class="display-4 fw-bold text-dark mb-3">
                        <i class="fas fa-tags me-3 text-primary"></i>Gestione Categorie
                    </h1>
                    <p class="lead text-muted">Organizza e gestisci le categorie dei tuoi progetti</p>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="{{ route('categories.create') }}" class="btn btn-primary btn-lg">
                        <i class="fas fa-plus me-2"></i>Aggiungi Nuova Categoria
                    </a>
                </div>
            </div>
        </div>

        <!-- Categories Table -->
        <div class="row">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-white border-0 py-4">
                        <h5 class="card-title mb-0">
                            <i class="fas fa-list me-2"></i>Elenco Categorie
                        </h5>
                    </div>
                    <div class="card-body p-0">
                        @if($categories->count() > 0)
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="px-4 py-3">#</th>
                                            <th class="px-4 py-3">Nome Categoria</th>
                                            <th class="px-4 py-3">Descrizione</th>
                                            <th class="px-4 py-3">Progetti</th>
                                            <th class="px-4 py-3 text-center">Azioni</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                            <tr>
                                                <td class="px-4 py-3 fw-semibold">{{ $category->id }}</td>
                                                <td class="px-4 py-3">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fas fa-tag me-2 text-primary"></i>
                                                        <span class="fw-semibold">{{ $category->name }}</span>
                                                    </div>
                                                </td>
                                                <td class="px-4 py-3">
                                                    <span
                                                        class="text-muted">{{ $category->description ?? 'Nessuna descrizione' }}</span>
                                                </td>
                                                <td class="px-4 py-3">
                                                    <span class="badge bg-info">{{ $category->projects->count() }}</span>
                                                </td>
                                                <td class="px-4 py-3 text-center">
                                                    <div class="btn-group" role="group">
                                                        <a href="{{ route('categories.edit', $category) }}"
                                                            class="btn btn-sm btn-outline-warning">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <form action="{{ route('categories.destroy', $category) }}" method="POST"
                                                            class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-outline-danger"
                                                                onclick="return confirm('Sei sicuro di voler eliminare questa categoria?')">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="text-center py-5">
                                <i class="fas fa-tags fa-3x text-muted mb-3"></i>
                                <h4 class="text-muted">Nessuna categoria trovata</h4>
                                <p class="text-muted">Inizia creando la tua prima categoria!</p>
                                <a href="{{ route('categories.create') }}" class="btn btn-primary">
                                    <i class="fas fa-plus me-2"></i>Crea Prima Categoria
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection