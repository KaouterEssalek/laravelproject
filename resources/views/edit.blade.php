<!-- schools/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Modifier l'école {{ $school->name }}</h1>
        <form action="{{ route('schools.update', $school->idSchool) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nom:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $school->name }}">
            </div>
            <div class="form-group">
                <label for="location">Emplacement:</label>
                <input type="text" class="form-control" id="location" name="location" value="{{ $school->location }}">
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
@endsection
