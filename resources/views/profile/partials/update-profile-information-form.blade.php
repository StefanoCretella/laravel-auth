@extends('layouts.app')

@section('content')
    <h2>Modifica Profilo</h2>
    <form method="POST" action="{{ route('profile.update') }}">
        @csrf
        @method('PATCH')

        <!-- Campi per la modifica del profilo -->
        <div>
            <label for="name">Nome</label>
            <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" required>
        </div>
        <button type="submit">Salva modifiche</button>
    </form>

    <!-- Form per eliminare l'account -->
    <form method="POST" action="{{ route('profile.destroy') }}">
        @csrf
        @method('DELETE')
        <button type="submit">Elimina Account</button>
    </form>
@endsection
