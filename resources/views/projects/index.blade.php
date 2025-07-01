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
                            <span class="badge bg-success project-badge">
                                <i class="fas fa-check-circle me-1"></i>Completato
                            </span>
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
                                    <a href="{{ $project->url }}" target="_blank" class="btn btn-primary flex-fill">
                                        <i class="fas fa-external-link-alt me-1"></i>
                                        Visualizza
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
@endsection