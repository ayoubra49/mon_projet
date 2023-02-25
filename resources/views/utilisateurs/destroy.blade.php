@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Supprimer l'utilisateur</h1>
        <p>Voulez-vous vraiment supprimer l'utilisateur {{ $utilisateur->nom }} ?</p>
        <form action="{{ route('utilisateurs.destroy', $utilisateur->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Supprimer</button>
            <a href="{{ route('utilisateurs.index') }}" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
@endsection
