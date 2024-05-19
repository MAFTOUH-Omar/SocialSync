@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Profile de l'utilisateur</h1>
    <p><strong>Nom complet:</strong> {{ $user->fullName }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Profile:</strong> {{ $user->profile }}</p>
    <p><strong>Numéro de téléphone:</strong> {{ $user->phone_number }}</p>
    <p><strong>Pays:</strong> {{ $user->country }}</p>
    <p><strong>Google ID:</strong> {{ $user->google_id }}</p>
    <p><strong>Github ID:</strong> {{ $user->github_id }}</p>
</div>
@endsection