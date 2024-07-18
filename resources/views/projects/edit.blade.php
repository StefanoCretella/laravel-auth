@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifica Profilo</h1>
    @include('profile.partials.update-profile-information-form', ['user' => $user])
</div>
@endsection
