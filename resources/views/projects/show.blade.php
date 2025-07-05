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
                        <i class="fas fa-project-diagram me-3 text-primary"></i>{{ $project->name }}
                    </h1> @foreach ($project->categories as $category)
                        <span class="badge bg-primary fs-6 mb-3">
                            <i class="fas fa-tag me-2"> </i>{{ $category->name }}
                        </span>
                    @endforeach



                    <p class="lead text-muted">{{ $project->description }}</p>
                </div>

                <div class="d-flex justify-content-center gap-3">
                    @if($project->url)
                        <a href="{{ $project->url }}" target="_blank" class="btn btn-primary btn-lg">
                            <i class="fas fa-external-link-alt me-2"></i>Visita Progetto
                        </a>
                    @endif
                    <a href="{{ route('projects.edit', $project) }}" class="btn btn-outline-success btn-lg">
                        <i class="fas fa-edit me-2"></i>Modifica Progetto
                    </a>
                    <a href="{{ route('projects.index') }}" class="btn btn-outline-secondary btn-lg">
                        <i class="fas fa-arrow-left me-2"></i>Torna ai Progetti
                    </a>
                </div>
            </div>
        </div>

        <!-- Project Details -->
        <div class="row">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-white border-0 py-4">
                        <h5 class="card-title mb-0">
                            <i class="fas fa-info-circle me-2"></i>Dettagli Progetto
                        </h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="fw-bold mb-3">
                                    <i class="fas fa-calendar-alt me-2 text-primary"></i>Data di Creazione
                                </h6>
                                <p class="text-muted mb-4">
                                    {{ $project->created_at ? $project->created_at->format('d/m/Y H:i') : 'N/A' }}
                                </p>

                                <h6 class="fw-bold mb-3">
                                    <i class="fas fa-edit me-2 text-primary"></i>Ultimo Aggiornamento
                                </h6>
                                <p class="text-muted mb-4">
                                    {{ $project->updated_at ? $project->updated_at->format('d/m/Y H:i') : 'N/A' }}
                                </p>
                            </div>
                            <div class="col-md-6">
                                <h6 class="fw-bold mb-3">
                                    <i class="fas fa-tag me-2 text-primary"></i>Categoria
                                </h6>
                                <p class="text-muted mb-4">
                                    @foreach ($project->categories as $category)
                                        <span class=" fs-6 mb-3">
                                            {{  $category->name }}
                                        </span>
                                    @endforeach
                                </p>

                                <h6 class="fw-bold mb-3">
                                    <i class="fas fa-link me-2 text-primary"></i>URL Progetto
                                </h6>
                                <p class="text-muted mb-4">
                                    @if($project->url)
                                        <a href="{{ $project->url }}" target="_blank" class="text-decoration-none">
                                            {{ $project->url }}
                                            <i class="fas fa-external-link-alt ms-2"></i>
                                        </a>
                                    @else
                                        Nessun URL specificato
                                    @endif
                                </p>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-12">
                                <h6 class="fw-bold mb-3">
                                    <i class="fas fa-align-left me-2 text-primary"></i>Descrizione Completa
                                </h6>
                                <div class="p-3 bg-light rounded">
                                    <p class="mb-0">{{ $project->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="d-flex justify-content-center gap-3">
                    <a href="{{ route('projects.edit', $project) }}" class="btn btn-warning">
                        <i class="fas fa-edit me-2"></i>Modifica Progetto
                    </a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                        <i class="fas fa-trash me-2"></i>Elimina Progetto
                    </button>
                </div>
            </div>
        </div>
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
                        <h5>Sei sicuro di voler eliminare "{{ $project->name }}"?</h5>
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
                    <form action="{{ route('projects.destroy', $project) }}" method="POST" class="d-inline">
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