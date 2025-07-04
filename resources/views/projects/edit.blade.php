@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/projects.css') }}">
@endpush

@section('content')
    <div class="container py-5">
        <!-- Header Section -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="text-center mb-4">
                    <h1 class="display-4 fw-bold text-dark mb-3">
                        <i class="fas fa-edit me-3 text-primary"></i>Modifica Progetto
                    </h1>
                    <p class="lead text-muted">Aggiorna i dettagli del progetto "{{ $project->name }}"</p>
                </div>
            </div>
        </div>

        <!-- Form Section -->
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-white border-0 py-4">
                        <h5 class="card-title mb-0">
                            <i class="fas fa-form me-2"></i>Dettagli Progetto
                        </h5>
                    </div>
                    <div class="card-body p-4">
                        <form action="{{ route('projects.update', $project) }}" method="POST">
                            @csrf
                            @method('PUT')
                            
                            <div class="mb-4">
                                <label for="name" class="form-label fw-semibold">
                                    <i class="fas fa-project-diagram me-2 text-primary"></i>Nome del Progetto
                                </label>
                                <input type="text" 
                                       class="form-control form-control-lg @error('name') is-invalid @enderror" 
                                       id="name" 
                                       name="name" 
                                       value="{{ old('name', $project->name) }}"
                                       placeholder="Inserisci il nome del progetto..."
                                       required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="category_id" class="form-label fw-semibold">
                                    <i class="fas fa-tag me-2 text-primary"></i>Categoria del Progetto
                                </label>
                                <select class="form-select form-select-lg @error('category_id') is-invalid @enderror" 
                                        id="category_id" 
                                        name="category_id">
                                    <option value="">Seleziona una categoria (opzionale)</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" 
                                                {{ (old('category_id') ?? $project->category_id) == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="description" class="form-label fw-semibold">
                                    <i class="fas fa-align-left me-2 text-primary"></i>Descrizione del Progetto
                                </label>
                                <textarea class="form-control @error('description') is-invalid @enderror" 
                                          id="description" 
                                          name="description" 
                                          rows="5"
                                          placeholder="Descrivi il tuo progetto, le tecnologie utilizzate, gli obiettivi..."
                                          required>{{ old('description', $project->description) }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="url" class="form-label fw-semibold">
                                    <i class="fas fa-link me-2 text-primary"></i>URL del Progetto
                                </label>
                                <input type="url" 
                                       class="form-control form-control-lg @error('url') is-invalid @enderror" 
                                       id="url" 
                                       name="url" 
                                       value="{{ old('url', $project->url) }}"
                                       placeholder="https://esempio.com"
                                       required>
                                @error('url')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <div class="form-text">
                                    <i class="fas fa-info-circle me-1"></i>
                                    Inserisci l'URL del progetto live, repository GitHub, o demo
                                </div>
                            </div>

                            <div class="d-flex gap-3 justify-content-end">
                                <a href="{{ route('projects.index') }}" class="btn btn-outline-secondary btn-lg">
                                    <i class="fas fa-arrow-left me-2"></i>Annulla
                                </a>
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="fas fa-save me-2"></i>Salva Modifiche
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection