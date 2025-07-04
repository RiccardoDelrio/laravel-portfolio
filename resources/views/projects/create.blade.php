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
                <label for="category_id" class="form-label">Categoria del Progetto</label>
                <select class="form-select" id="category_id" name="category_id">
                    <option value="">Nessuna categoria</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione del Progetto</label>
                    <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="url" class="form-label">URL del Progetto</label>
                    <input type="url" class="form-control" id="url" name="url" placeholder="https://esempio.com" required>
                </div>

                <button type="submit" class="btn btn-primary">Crea Progetto</button>
            </div>


    </form>

@endsection