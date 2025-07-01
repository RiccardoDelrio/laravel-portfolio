@extends ('layouts.app')
@section("content")
    <h1>Modifica il progetto</h1>
    <form action="{{ route("projects.update", $project) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-control">
            <div class="mb-3">
                <label for="name" class="form-label">Nome del Progetto</label>
                <input type="text" class="form-control" id="name" name="name" required value="{{ $project->name }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione del Progetto</label>
                <textarea class="form-control" id="description" name="description" rows="4"
                    required>{{ $project->description }}</textarea>
            </div>

            <div class=" mb-3">
                <label for="url" class="form-label">URL del Progetto</label>
                <input type="url" class="form-control" id="url" name="url" placeholder="https://esempio.com" required
                    value="{{ $project->url }}">
            </div>

            <div class="mb-3">
                <label for="tech" class="form-label">Tecnologie Utilizzate (separate da virgola)</label>
                <input type="text" class="form-control" id="tech" name="tech" placeholder="Laravel, Vue.js, Bootstrap"
                    value="{{ is_array($project->tech) ? implode(', ', $project->tech) : $project->tech }}">
            </div>

            <button type="submit" class="btn btn-primary">Aggiorna Progetto</button>
        </div>


    </form>

@endsection