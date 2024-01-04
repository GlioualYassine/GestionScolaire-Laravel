<!-- Afficher les détails d'un étudiant -->
<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Détails de l\'étudiant') }}
        </h2>
</x-slot>

@section('content')
    <div class="container">
        <div class="test" style="height : 30px;"><p></p></div>
        <p><strong>ID:</strong> {{ $etudiant->id }}</p>
        <p><strong>Nom de l'étudiant:</strong> {{ $etudiant->nom }}</p>
        <p><strong>Prénom de l'étudiant:</strong> {{ $etudiant->prenom }}</p>
        <p><strong>Sexe de l'étudiant:</strong> {{ $etudiant->sexe }}</p>
        <p><strong>Filière de l'étudiant:</strong> {{ $etudiant->filiere->nom }}</p>
        <a href="{{ route('etudiants.index') }}" class="btn btn-secondary">Retour à la liste des étudiants</a>
    </div>
@endsection
</x-app-layout>
