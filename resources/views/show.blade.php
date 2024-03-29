<!-- schools/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Détails de l'école {{ $school->name }}</h1>
        <p><strong>Nom:</strong> {{ $school->name }}</p>
        <p><strong>Emplacement:</strong> {{ $school->location }}</p>
        <a href="{{ route('schools.edit', $school->idSchool) }}" class="btn btn-primary">Modifier</a>
        <form action="{{ route('schools.destroy', $school->idSchool) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette école ?')">Supprimer</button>
        </form>
    </div>
@endsection
