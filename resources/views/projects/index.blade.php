@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <!-- Header Section -->
        <div class="row mb-5">
            <div class="col-12 text-center projects-header">
                <h1 class="display-4 fw-bold mb-3">
                    <i class="fas fa-code me-3"></i>I Miei Progetti
                </h1>
                <p class="lead text-muted">Esplora la mia collezione di progetti e lavori</p>
                <hr class="w-25 mx-auto">
            </div>
        </div>

        <div class="row g-4">
            @foreach ($projects as $project)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card h-100 shadow-sm project-card">
                        <!-- Project Image Placeholder -->
                        <div class="card-img-top">
                            <div class="project-icon">
                                <i class="fas fa-laptop-code"></i>
                            </div>
                            <!-- Project Badge -->

                            <button type="button" class="btn bg-danger project-badge" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Delete
                            </button>

                        </div>

                        <div class="card-body d-flex flex-column">
                            <!-- Project Title -->
                            <h5 class="card-title fw-bold text-dark mb-3">
                                <i class="fas fa-project-diagram me-2 text-primary"></i>
                                {{ $project->name }}
                            </h5>

                            <!-- Project Description -->
                            <p class="card-text text-muted flex-grow-1 mb-3">
                                {{ Str::limit($project->description, 120, '...') }}
                            </p>

                            <!-- Project Tech Stack (if available) -->
                            <div class="tech-badges">
                                @if($project->tech && is_array($project->tech))
                                    @foreach($project->tech as $technology)
                                        <span class="badge bg-primary me-1 mb-1">{{ $technology }}</span>
                                    @endforeach
                                @endif
                            </div>

                            <!-- Action Buttons -->
                            <div class="d-flex action-buttons mt-auto">
                                @if($project->url)
                                    <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-primary flex-fill">
                                        <i class="fas fa-external-link-alt me-1"></i>
                                        Modifica Progetto
                                    </a>
                                @endif
                                <a href="{{ route("projects.show", $project->id) }}"
                                    class="btn btn-outline-secondary flex-fill">
                                    <i class="fas fa-info-circle me-1"></i>
                                    Dettagli
                                </a>
                            </div>
                        </div>

                        <!-- Card Footer with Date -->
                        <div class="card-footer bg-transparent border-0 text-muted small">
                            <i class="fas fa-calendar-alt me-1"></i>
                            Creato {{ $project->created_at ? $project->created_at->format('d/m/Y') : 'N/A' }}
                        </div>
                    </div>
                </div>



            @endforeach
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Sei sicuro di voler eliminare il progetto?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    L'eliminazione di un progetto è un'azione irreversibile. Non sarà possibile recuperarlo dopo la
                    cancellazione.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <form action="{{route('projects.destroy', $project)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Elimina" class="btn bg-danger project-badge">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection