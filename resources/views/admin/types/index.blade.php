@extends('layouts.app')

@section('content')
<h1>TYPE OF PROJECTS</h1>

@foreach ($types as $type)

<ul class="list-unstyled d-flex m-0 gap-1 justify-content">
    <li>
        <h2><a href="{{ route('admin.types.show', $type->id) }}" class="btn btn-sm btn-primary">{{$type->name}}</a></h2>
    </li>
    {{-- <li>
        <a href="{{ route('admin.types.edit', $type) }}"><button type="button" class="btn btn-sm btn-warning">Modifica</button></a>
    </li> --}}
    <li>
        <form action="{{ route('admin.types.destroy', $type->id) }}"
            method="POST">
            @csrf
            @method('DELETE')
            
            <input type="submit" id="delete" value="Elimina" class="btn btn-sm btn-danger">
        </form>
    </li>
</ul>
 
@endforeach

<a href="{{ route('admin.types.create') }}"><button type="button">Crea un nuovo tipo di progetto</button></a>
    
@endsection