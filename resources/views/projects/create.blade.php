@extends('layouts.backoffice')

@section('title', 'Crea Progetto')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Crea Nuovo Progetto</h1>
    <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="image">Immagine</label>
            <input type="file" name="image" id="image" class="form-control-file">
        </div>
        <button type="submit" class="btn btn-success">Crea</button>
    </form>
</div>
@endsection
