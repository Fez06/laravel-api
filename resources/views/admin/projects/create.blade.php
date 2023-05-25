@extends('layouts.app')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error )
            <li style="color:crimson"> {{$error}} </li>
            @endforeach
        </ul>
    </div>
@endif

<h1>Crea un nuovo progetto!</h1>

<form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="title">Title</label>
    <input type="text" class='form-control' name="title" id="title" value="{{ old('title') }}">

    <label for="description">Description:</label>
    <input type="text" class='form-control' name="description" id="description" value="{{ old('description') }}">

    <label for="image">Inserisci un'immagine:</label>
    <input type="file" class='form-control' name="image" id="image">

    <label for="type_id" class="form-label">Type</label>
    <select class="form-select" name="type_id" id="type_id">
        <option value="">Select type:</option>
        @foreach ($types as $type)
            <option value="{{ $type->id }}" {{ old('type_id') == $type->id ? 'selected' : ''}}>{{ $type->name }}</option>
        @endforeach
    </select>

    @foreach ($technologies as $technology)
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="technologies" value="{{ $technology->id }}" name="technologies[]" {{ in_array($technology->id, old('technologies', [])) ? 'checked' : '' }}>
            <label class="form-check-label" for="technologies">{{ $technology->name }}</label>
        </div>
    @endforeach
    <br>
    <input type="submit" class='form-control' value="Aggiungi Progetto!">
</form>
    
@endsection