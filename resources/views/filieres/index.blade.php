<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Liste des filières') }}
        </h2>
</x-slot>

@section('content')
    <div class="container">
    <div class="test" style="height : 30px;"><p></p></div>
        <a href="{{ route('filieres.create') }}" class="btn btn-success">Ajouter une filière</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom de la filière</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($filieres as $filiere)
                    <tr>
                        <th scope="row">{{ $filiere->id }}</th>
                        <td>{{ $filiere->nom }}</td>
                        <td>
                            <a href="{{ route('filieres.edit', $filiere->id) }}" class="btn btn-primary">Modifier</a>
                            <a href="{{ route('filieres.show', $filiere->id) }}" class="btn btn-info">Voir</a>
                            <form method="POST" action="{{ route('filieres.destroy', $filiere->id) }}" style="display:inline;">
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
