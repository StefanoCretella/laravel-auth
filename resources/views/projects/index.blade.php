@extends('layouts.backoffice')

@section('title', 'Progetti')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Lista dei Progetti</h1>
    <a href="{{ route('projects.create') }}" class="btn btn-success mb-3">Crea Nuovo Progetto</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titolo</th>
                <th>Descrizione</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->description }}</td>
                    <td>
                        <a href="{{ route('projects.show', $project) }}" class="btn btn-info">Visualizza</a>
                        <a href="{{ route('projects.edit', $project) }}" class="btn btn-warning">Modifica</a>
                        <form action="{{ route('projects.destroy', $project) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Elimina</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
