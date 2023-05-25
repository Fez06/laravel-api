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

<h1>Crea un nuovo tipo !</h1>

<form action="{{ route('admin.types.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="name">Name:</label>
    <input type="text" class='form-control' name="name" id="name" value="{{ old('name') }}">

    <br>
    <input type="submit" class='form-control' value="Aggiungi Progetto!">
</form>
    
@endsection