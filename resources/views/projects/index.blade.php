@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Progetti</h1>
        <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">Aggiungi Progetto</a>
        <ul>
            @foreach($projects as $project)
                <li>
                    <a href="{{ route('admin.projects.show', $project->id) }}">{{ $project->title }}</a>
                    <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Elimina</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
