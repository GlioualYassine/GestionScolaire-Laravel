<!-- Afficher les détails d'une filière -->
<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Détails de la filière') }}
        </h2>
</x-slot>

@section('content')
    <div class="container">
    <div class="test" style="height : 30px;"><p></p></div>
        <p><strong>ID:</strong> {{ $filiere->id }}</p>
        <p><strong>Nom de la filière:</strong> {{ $filiere->nom }}</p>
        <a href="{{ route('filieres.index') }}" class="btn btn-secondary">Retour à la liste des filières</a>
    </div>
@endsection
</x-app-layout>
