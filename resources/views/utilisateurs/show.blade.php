@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $utilisateur->nom }} {{ $utilisateur->prenom }}</div>

                    <div class="card-body">
                        <p><strong>Nom :</strong> {{ $utilisateur->nom }}</p>
                        <p><strong>Prénom :</strong> {{ $utilisateur->prenom }}</p>
                        <p><strong>Email :</strong> {{ $utilisateur->email }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
