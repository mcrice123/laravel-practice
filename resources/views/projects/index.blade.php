@extends('layout')

@section('title') 
    Projects | My First Website
@endsection

@section('content')
    <div class="title m-b-md">
        Projects
    </div>
    <a class="blue" href="/projects/create">
        Create Project
    </a>
    <ul>
        @foreach ($projects as $project) 
            <li><a href="/projects/{{ $project->id }}">{{ $project->title }}</a></li>
        @endforeach
    </ul>

@endsection