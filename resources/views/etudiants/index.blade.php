<!-- Afficher la liste des étudiants -->
<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Liste etudiant') }}
        </h2>
</x-slot>

@section('content')
    <div class="container">
        <div class="test" style="height : 30px;"><p></p></div>
        <a href="{{ route('etudiants.create') }}" class="btn btn-success">Ajouter un étudiant</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Filière</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($etudiants as $etudiant)
                    <tr>
                        <th scope="row">{{ $etudiant->id }}</th>
                        <td>{{ $etudiant->nom }}</td>
                        <td>{{ $etudiant->prenom }}</td>
                        <td>{{ $etudiant->filiere->nom }}</td>
                        <td>
                            <a href="{{ route('etudiants.edit', $etudiant->id) }}" class="btn btn-primary">Modifier</a>
                            <a href="{{ route('etudiants.show', $etudiant->id) }}" class="btn btn-info">Voir</a>
                            <form method="POST" action="{{ route('etudiants.destroy', $etudiant->id) }}" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn" style="background-color: #bb2c3a; color: white;">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
</x-app-layout>
