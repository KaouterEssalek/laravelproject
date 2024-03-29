<!-- schools/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Ajouter une école</h1>
        <form action="{{ route('schools.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nom:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="location">Emplacement:</label>
                <input type="text" class="form-control" id="location" name="location">
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
@endsection
