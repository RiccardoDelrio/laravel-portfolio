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
                        <i class="fas fa-project-diagram me-3 text-primary"></i>I Miei Progetti
                    </h1>
                    <p class="lead text-muted">Esplora la collezione di progetti e lavori del portfolio</p>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="{{ route('projects.create') }}" class="btn btn-primary btn-lg">
                        <i class="fas fa-plus me-2"></i>Aggiungi Nuovo Progetto
                    </a>
                </div>
            </div>
        </div>

        <!-- Projects Grid -->
        @if($projects->count() > 0)
            <div class="row g-4">
                @foreach ($projects as $project)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card h-100 shadow-sm project-card">
                            <!-- Project Image Placeholder -->
                            <div class="card-img-top position-relative">
                                <div class="project-icon d-flex align-items-center justify-content-center">
                                    <i class="fas fa-laptop-code fa-4x text-white"></i>
                                </div>

                                <!-- Category Badge -->
                                @if($project->category)
                                    <span class="badge bg-primary position-absolute top-0 start-0 m-3">
                                        {{ $project->category->name }}
                                    </span>
                                @endif

                                <!-- Delete Button -->
                                <button type="button" class="btn btn-danger btn-sm position-absolute top-0 end-0 m-3"
                                    data-bs-toggle="modal" data-bs-target="#deleteModal" data-project-id="{{ $project->id }}">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>

                            <div class="card-body d-flex flex-column">
                                <!-- Project Title -->
                                <h5 class="card-title fw-bold text-dark mb-3">
                                    <i class="fas fa-code me-2 text-primary"></i>
                                    {{ $project->name }}
                                </h5>

                                <!-- Project Description -->
                                <p class="card-text text-muted flex-grow-1 mb-3">
                                    {{ Str::limit($project->description, 120, '...') }}
                                </p>

                                <!-- Action Buttons -->
                                <div class="mt-auto">
                                    <div class="d-flex gap-2 mb-3">
                                        @if($project->url)
                                            <a href="{{ $project->url }}" target="_blank" class="btn btn-outline-primary flex-fill">
                                                <i class="fas fa-external-link-alt me-1"></i>
                                                Visita Progetto
                                            </a>
                                        @endif
                                        <a href="{{ route('projects.edit', $project->id) }}"
                                            class="btn btn-outline-success flex-fill">
                                            <i class="fas fa-edit me-1"></i>
                                            Modifica
                                        </a>
                                    </div>
                                    <a href="{{ route('projects.show', $project->id) }}" class="btn btn-primary w-100">
                                        <i class="fas fa-info-circle me-1"></i>
                                        Vedi Dettagli
                                    </a>
                                </div>
                            </div>

                            <!-- Card Footer with Date -->
                            <div class="card-footer bg-transparent border-0 text-muted small">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span>
                                        <i class="fas fa-calendar-alt me-1"></i>
                                        {{ $project->created_at ? $project->created_at->format('d/m/Y') : 'N/A' }}
                                    </span>
                                    @if($project->updated_at && $project->updated_at != $project->created_at)
                                        <span class="badge bg-secondary">
                                            <i class="fas fa-edit me-1"></i>Aggiornato
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <!-- Empty State -->
            <div class="row">
                <div class="col-12">
                    <div class="text-center py-5">
                        <i class="fas fa-project-diagram fa-5x text-muted mb-4"></i>
                        <h3 class="text-muted mb-3">Nessun progetto trovato</h3>
                        <p class="text-muted mb-4">Inizia creando il tuo primo progetto per il portfolio!</p>
                        <a href="{{ route('projects.create') }}" class="btn btn-primary btn-lg">
                            <i class="fas fa-plus me-2"></i>Crea Primo Progetto
                        </a>
                    </div>
                </div>
            </div>
        @endif
    </div>

    <!-- Delete Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="deleteModalLabel">
                        <i class="fas fa-exclamation-triangle me-2"></i>Conferma Eliminazione
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <i class="fas fa-trash-alt fa-3x text-danger mb-3"></i>
                        <h5>Sei sicuro di voler eliminare questo progetto?</h5>
                        <p class="text-muted">
                            L'eliminazione di un progetto è un'azione irreversibile.
                            Non sarà possibile recuperarlo dopo la cancellazione.
                        </p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        <i class="fas fa-times me-2"></i>Annulla
                    </button>
                    <form id="deleteForm" action="" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i class="fas fa-trash me-2"></i>Elimina Progetto
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script src="{{ asset('js/projects.js') }}"></script>
@endpush