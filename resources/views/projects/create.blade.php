@extends ('layouts.app')
@section("content")
    <form action="{{ route("projects.store") }}" method="POST">
        @csrf
        <div class="form-control">
            <div class="mb-3">
                <label for="name" class="form-label">Nome del Progetto</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione del Progetto</label>
                <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
            </div>

            <div class="mb-3">
                <label for="url" class="form-label">URL del Progetto</label>
                <input type="url" class="form-control" id="url" name="url" placeholder="https://esempio.com" required>
            </div>

            <div class="mb-3">
                <label for="tech" class="form-label">Tecnologie Utilizzate (separate da virgola)</label>
                <input type="text" class="form-control" id="tech" name="tech" placeholder="Laravel, Vue.js, Bootstrap">
            </div>

            <button type="submit" class="btn btn-primary">Crea Progetto</button>
        </div>


    </form>

@endsection