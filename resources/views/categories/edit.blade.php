@extends ('layouts.app')
@section("content")
    <form action="{{ route('categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nome Categoria</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" required>
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control" id="description" name="description">{{ $category->description }}</textarea>
            <button type="submit" class="btn btn-primary">Salva</button>
            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Annull
                a</a>
    </form>

@endsection