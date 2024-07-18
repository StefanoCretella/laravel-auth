@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $project->title }}</h1>
        <p>{{ $project->description }}</p>
        @if ($project->image)
            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}">
        @endif
        <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-primary">Modifica</a>
    </div>
@endsection
