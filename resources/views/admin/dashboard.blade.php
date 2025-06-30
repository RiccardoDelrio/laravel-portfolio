@extends('layouts.app')

@section('content')
    <div class="container py-5 mt-5">
        <!-- Header Section -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h1 class="display-5 fw-bold text-dark mb-2">Dashboard Admin</h1>
                        <p class="lead text-muted mb-0">Benvenuto, <span
                                class="fw-semibold text-primary">{{ $user->name }}</span>!</p>
                    </div>
                    <div class="d-flex gap-2">
                        <button class="btn btn-outline-primary"><i class="fas fa-cog me-2"></i>Impostazioni</button>
                        <button class="btn btn-primary"><i class="fas fa-plus me-2"></i>Nuovo Progetto</button>
                    </div>
                </div>
            </div>
        </div>



        <!-- Main Content -->
        <div class="row g-4">
            <!-- Quick Actions -->
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header bg-white border-0 py-4">
                        <h5 class="card-title mb-0">
                            <i class="fas fa-bolt text-warning me-2"></i>
                            Azioni Rapide
                        </h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="d-grid gap-3">
                            <button class="btn btn-outline-primary btn-lg d-flex align-items-center justify-content-start">
                                <i class="fas fa-plus-circle me-3"></i>
                                <div class="text-start">
                                    <div class="fw-semibold">Aggiungi Progetto</div>
                                    <small class="text-muted">Crea un nuovo progetto per il portfolio</small>
                                </div>
                            </button>

                            <button class="btn btn-outline-success btn-lg d-flex align-items-center justify-content-start">
                                <i class="fas fa-edit me-3"></i>
                                <div class="text-start">
                                    <div class="fw-semibold">Modifica Profilo</div>
                                    <small class="text-muted">Aggiorna le informazioni personali</small>
                                </div>
                            </button>

                            <button class="btn btn-outline-info btn-lg d-flex align-items-center justify-content-start">
                                <i class="fas fa-cogs me-3"></i>
                                <div class="text-start">
                                    <div class="fw-semibold">Gestisci Competenze</div>
                                    <small class="text-muted">Aggiungi o rimuovi tecnologie</small>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>


@endsection