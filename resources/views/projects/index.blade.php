@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Projects') }}</div>

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h1>Projects</h1>
                            <a href="{{ route('projects.create') }}" class="btn btn-primary">
                                {{ __('Add New Project') }}
                            </a>
                        </div>

                        @if($projects->count() > 0)
                            <div class="row">
                                @foreach($projects as $project)
                                    <div class="col-md-6 mb-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $project->name }}</h5>
                                                <p class="card-text">{{ $project->description }}</p>
                                                @if($project->url)
                                                    <a href="{{ $project->url }}" class="btn btn-sm btn-outline-primary"
                                                        target="_blank">
                                                        {{ __('View Project') }}
                                                    </a>
                                                @endif
                                                <a href="{{ route('projects.show', $project->id) }}"
                                                    class="btn btn-sm btn-secondary">
                                                    {{ __('Details') }}
                                                </a>
                                                <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-sm btn-warning">
                                                    {{ __('Edit') }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <p>{{ __('No projects found.') }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection