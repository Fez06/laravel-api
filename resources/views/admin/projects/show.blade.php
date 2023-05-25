@extends('layouts.app')

@section('content')

<h1>{{$project->title}}</h1>

<h5>Type of project: {{ $project->type?->name}}</h5>

<p>
    {{$project?->technology?->name}}
</p>

<p>
    {{$project->description}}
</p>

<div>
    <img src="{{ asset('storage/' . $project->image)}}" alt="project image">
</div>
@endsection