@extends('layouts.app')

@section('content')
    <div class="container py-5">

        <!-- Project Header Section -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h1 class="display-4 fw-bold mb-3">
                    <i class="fas fa-project-diagram me-3"></i>{{ $project->name }}
                </h1>
                <p class="lead text-muted">{{ $project->description }}</p>
                <hr class="w-25 mx-auto">
                <div>
                    {{ $project->category ? $project->category->name : 'Nessuna categoria' }}
                </div>
            </div>
        </div>


@endsection