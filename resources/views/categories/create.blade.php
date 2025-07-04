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
                        <i class="fas fa-plus-circle me-3 text-primary"></i>Crea Nuova Categoria
                    </h1>
                    <p class="lead text-muted">Aggiungi una nuova categoria per organizzare i tuoi progetti</p>
                </div>
            </div>
        </div>

        <!-- Form Section -->
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-white border-0 py-4">
                        <h5 class="card-title mb-0">
                            <i class="fas fa-form me-2"></i>Dettagli Categoria
                        </h5>
                    </div>
                    <div class="card-body p-4">
                        <form action="{{ route('categories.store') }}" method="POST">
                            @csrf

                            <div class="mb-4">
                                <label for="name" class="form-label fw-semibold">
                                    <i class="fas fa-tag me-2 text-primary"></i>Nome Categoria
                                </label>
                                <input type="text" class="form-control form-control-lg @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{ old('name') }}"
                                    placeholder="Inserisci il nome della categoria..." required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="description" class="form-label fw-semibold">
                                    <i class="fas fa-align-left me-2 text-primary"></i>Descrizione (Opzionale)
                                </label>
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description"
                                    name="description" rows="4"
                                    placeholder="Inserisci una descrizione per la categoria...">{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <div class="form-text">
                                    <i class="fas fa-info-circle me-1"></i>
                                    La descrizione aiuta a identificare meglio la categoria
                                </div>
                            </div>

                            <div class="d-flex gap-3 justify-content-end">
                                <a href="{{ route('categories.index') }}" class="btn btn-outline-secondary btn-lg">
                                    <i class="fas fa-arrow-left me-2"></i>Annulla
                                </a>
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="fas fa-save me-2"></i>Salva Categoria
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection