@extends('layouts.app')

@section('content')


<h5>Type of project: {{ $type->name}}</h5>

<p>
    {{$type->slug}}
</p>

@endsection