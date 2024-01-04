<!-- Afficher le formulaire de modification d'une filière existante -->
<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Modifier la filière') }}
        </h2>
</x-slot>

@section('content')
    <div class="container">
    <div class="test" style="height : 30px;"><p></p></div>
        <form method="POST" action="{{ route('filieres.update', $filiere->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nom" class="form-label">Nom de la filière:</label>
                <input type="text" class="form-control" name="nom" value="{{ $filiere->nom }}" required>
            </div>
            <button type="submit" class="btn" style="background-color : #0b5fd6 ; color : white ;">Modifier</button>
        </form>
        <a href="{{ route('filieres.index') }}" class="btn btn-secondary mt-3">Retour à la liste des filières</a>
    </div>
@endsection
</x-app-layout>
