@extends('layout')

@section('title') 
    Update Project | My First Website
@endsection

@section('content')
    <div class="title m-b-md">
        Projects
    </div>
    <div>Update {{ $project->title }}</div>
    <form method="PUT" action="/projects/{{ $project->id }}/edit">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
        <div>
            <input type="text" name="title" placeholder="Project title" value="{{ $project->title }}" />
        </div>
        <div>
            <textarea name="description" placeholder="Project description">{{ $project->description }}</textarea>
        </div>
        <div>
            <button type="submit">Update Project</button>
        </div>
    </form>
@endsection