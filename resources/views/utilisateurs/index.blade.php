@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Liste des utilisateurs</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($utilisateurs as $utilisateur)
                    <tr>
                        <td>{{ $utilisateur->id }}</td>
                        <td>{{ $utilisateur->nom }}</td>
                        <td>{{ $utilisateur->email }}</td>
                        <td>
                            <a href="{{ route('utilisateurs.show', $utilisateur->id) }}" class="btn btn-primary">Voir</a>
                            <a href="{{ route('utilisateurs.edit', $utilisateur->id) }}" class="btn btn-warning">Modifier</a>
                            <form action="{{ route('utilisateurs.destroy', $utilisateur->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('utilisateurs.create') }}" class="btn btn-success">Créer un nouvel utilisateur</a>
    </div>
@endsection