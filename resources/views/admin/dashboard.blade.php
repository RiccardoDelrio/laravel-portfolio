@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <!-- Header Section -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="text-center mb-4">
                    <h1 class="display-4 fw-bold text-dark mb-3">
                        <i class="fas fa-tachometer-alt me-3 text-primary"></i>Dashboard Admin
                    </h1>
                    <p class="lead text-muted">Benvenuto, <span class="fw-semibold text-primary">{{ $user->name }}</span>!
                    </p>
                    <p class="text-muted">Gestisci i tuoi progetti e le categorie dal pannello di controllo</p>
                </div>
                <div class="d-flex justify-content-center gap-2 mb-4">
                    <a href="{{ route('projects.create') }}" class="btn btn-primary btn-lg">
                        <i class="fas fa-plus me-2"></i>Nuovo Progetto
                    </a>
                    <a href="{{ route('categories.create') }}" class="btn btn-outline-primary btn-lg">
                        <i class="fas fa-tags me-2"></i>Nuova Categoria
                    </a>
                </div>
            </div>
        </div>


        <!-- Statistics Cards -->
        <div class="row g-4 mb-5">
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm h-100 bg-gradient-primary text-white">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fas fa-project-diagram fa-3x mb-3 opacity-75"></i>
                            <h2 class="display-4 fw-bold">{{ $totalProjects }}</h2>
                            <p class="mb-0 fs-5">Progetti Totali</p>
                        </div>
                        <a href="{{ route('projects.index') }}" class="btn btn-light btn-sm">
                            <i class="fas fa-arrow-right me-1"></i>Visualizza Tutti
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm h-100 bg-gradient-success text-white">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fas fa-tags fa-3x mb-3 opacity-75"></i>
                            <h2 class="display-4 fw-bold">{{ $totalCategories }}</h2>
                            <p class="mb-0 fs-5">Categorie Totali</p>
                        </div>
                        <a href="{{ route('categories.index') }}" class="btn btn-light btn-sm">
                            <i class="fas fa-arrow-right me-1"></i>Visualizza Tutte
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Quick Actions -->
        <div class="row g-4">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-white border-0 py-4">
                        <h5 class="card-title mb-0">
                            <i class="fas fa-bolt text-warning me-2"></i>
                            Azioni Rapide
                        </h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <a href="{{ route('projects.create') }}"
                                    class="btn btn-outline-primary btn-lg w-100 d-flex align-items-center justify-content-start text-decoration-none">
                                    <i class="fas fa-plus-circle me-3 fs-4"></i>
                                    <div class="text-start">
                                        <div class="fw-semibold">Aggiungi Progetto</div>
                                        <small class="text-muted">Crea un nuovo progetto per il portfolio</small>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('projects.index') }}"
                                    class="btn btn-outline-success btn-lg w-100 d-flex align-items-center justify-content-start text-decoration-none">
                                    <i class="fas fa-list me-3 fs-4"></i>
                                    <div class="text-start">
                                        <div class="fw-semibold">Gestisci Progetti</div>
                                        <small class="text-muted">Visualizza e modifica tutti i progetti</small>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('categories.index') }}"
                                    class="btn btn-outline-info btn-lg w-100 d-flex align-items-center justify-content-start text-decoration-none">
                                    <i class="fas fa-tags me-3 fs-4"></i>
                                    <div class="text-start">
                                        <div class="fw-semibold">Gestisci Categorie</div>
                                        <small class="text-muted">Aggiungi o modifica le categorie</small>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('categories.create') }}"
                                    class="btn btn-outline-warning btn-lg w-100 d-flex align-items-center justify-content-start text-decoration-none">
                                    <i class="fas fa-plus me-3 fs-4"></i>
                                    <div class="text-start">
                                        <div class="fw-semibold">Nuova Categoria</div>
                                        <small class="text-muted">Crea una nuova categoria</small>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection