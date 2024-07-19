@extends('layouts.app')

@section('content')
<div>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <h1>Modifica Progetto</h1>
    <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" value="{{ old('title', $project->title) }}" required>
            @error('title')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="description">Descrizione</label>
            <textarea name="description" id="description">{{ old('description', $project->description) }}</textarea>
            @error('description')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="image">Immagine</label>
            <input type="file" name="image" id="image">
            @if ($project->image)
                <img src="{{ Storage::url($project->image) }}" alt="{{ $project->title }}" style="max-width: 200px;">
            @endif
            @error('image')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Aggiorna Progetto</button>
    </form>

    <form action="{{ route('projects.destroy', $project->id) }}" method="POST" class="mt-4">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Sei sicuro di voler eliminare questo progetto?')">Elimina Progetto</button>
    </form>
</div>
@endsection
