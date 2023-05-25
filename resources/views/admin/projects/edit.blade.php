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

<form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data">
    @csrf

    @method('PUT')

    <label for="title">Title</label>
    <input type="text" class='form-control' name="title" id="title" value="{{ old('title', $project->title) }}">
    <br>
    <label for="description">Description:</label>
    <input type="text" class='form-control' name="description" id="description" value="{{ old('description', $project->description) }}">
    <br>
    <label for="image">Inserisci un'immagine:</label>
    <input type="file" class='form-control' name="image" id="image">

    {{-- <label for="type_id" class="form-label">Type</label>
    <select class="form-select" name="type_id" id="type_id">
        <option value="">Select type:</option>
        @foreach ($types as $type)
            <option value="{{ $type->id }}" {{ old('type_id')== $type->id ? 'selected' : ''}}>{{ $type->name }}</option>
        @endforeach
    </select> --}}

    <input type="submit" class='form-control' value="Modifica Progetto!">
</form>

<h3><a href="{{ route('admin.projects.index')}}">Torna indietro</a></h3>
    
@endsection