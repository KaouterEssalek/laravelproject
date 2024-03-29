<!-- schools/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Liste des écoles</h1>
        <a href="{{ route('schools.create') }}" class="btn btn-primary mb-3">Ajouter une école</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Emplacement</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($schools as $school)
                    <tr>
                        <td>{{ $school->name }}</td>
                        <td>{{ $school->location }}</td>
                        <td>
                            <a href="{{ route('schools.show', $school->idSchool) }}" class="btn btn-info btn-sm">Voir</a>
                            <a href="{{ route('schools.edit', $school->idSchool) }}" class="btn btn-primary btn-sm">Modifier</a>
                            <form action="{{ route('schools.destroy', $school->idSchool) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette école ?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
