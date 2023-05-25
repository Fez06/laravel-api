@extends('layouts.app')

@section('content')
<h1>PROJECTS LIST</h1>

@foreach ($projects as $project)

<ul class="list-unstyled d-flex m-0 gap-1 justify-content">
    <li>
        <h2><a href="{{ route('admin.projects.show', $project) }}" class="btn btn-sm btn-primary">{{$project->title}}</a></h2>
    </li>
    <li>
        <a href="{{ route('admin.projects.edit', $project) }}"><button type="button" class="btn btn-sm btn-warning">Modifica</button></a>
    </li>
    <li>
        <form action="{{ route('admin.projects.destroy', $project->id) }}"
            method="POST">
            @csrf
            @method('DELETE')
            
            <input type="submit" id="delete" value="Elimina" class="btn btn-sm btn-danger">
        </form>
    </li>
</ul>
 
@endforeach

<a href="{{ route('admin.projects.create') }}"><button type="button">Crea un nuovo progetto</button></a>
    
@endsection