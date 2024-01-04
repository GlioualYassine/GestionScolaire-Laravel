<!-- Afficher le formulaire de création d'un nouvel étudiant -->
<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Ajouter etudiant') }}
        </h2>
</x-slot>

@section('content')
    <div class="container" >
    <div class="test" style="height : 30px;"><p></p></div>
        <form method="POST" action="{{ route('etudiants.store') }}">
            @csrf
            <div class="mb-3">
                <label for="nom" class="form-label">Nom de l'étudiant:</label>
                <input type="text" class="form-control" name="nom" required>
            </div>
            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom de l'étudiant:</label>
                <input type="text" class="form-control" name="prenom" required>
            </div>
            <div class="mb-3">
                <label for="sexe" class="form-label">Sexe de l'étudiant:</label>
                <input type="text" class="form-control" name="sexe" required>
            </div>
            <div class="mb-3">
                <label for="filiere_id" class="form-label">Filière de l'étudiant:</label>
                <select name="filiere_id" class="form-select" required>
                    @foreach($filieres as $filiere)
                        <option value="{{ $filiere->id }}">{{ $filiere->nom }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="user_id">Utilisateur</label>
                <select name="user_id" class="form-control">
                    @foreach($utilisateurs as $utilisateur)
                        <option value="{{ $utilisateur->id }}">{{ $utilisateur->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success" style="background-color: #157347; color: white;">Créer</button>
        </form>
        <a href="{{ route('etudiants.index') }}" class="btn btn-secondary mt-3">Retour à la liste des étudiants</a>
    </div>
@endsection
</x-app-layout>
