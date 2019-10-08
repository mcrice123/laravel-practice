@extends('layout')

@section('title') 
    {{ $project->title }} | My First Website
@endsection

@section('content')
    <div class="title m-b-md">
        Projects
    </div>
    <a class="blue" href="/projects">&lt; Back</a>
    <h1>"{{ $project->title }}" Details</h1>
    <p>{{ $project->description }}</p>
    <a class="blue" href="/projects/{{ $project->id }}/update">Edit</a>
    <a class="red" href="/projects/{{ $project->id }}/delete">Delete</a>
@endsection