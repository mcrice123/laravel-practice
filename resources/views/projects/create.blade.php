@extends('layout')

@section('title') 
    New Project | My First Website
@endsection

@section('content')
    <div class="title m-b-md">
        Projects
    </div>
    <div>Submit a new project:</div>
    <form method="POST" action="/projects">
        {{ csrf_field() }}
        <div>
            <input type="text" name="title" placeholder="Project title" />
        </div>
        <div>
            <textarea name="description" placeholder="Project description"></textarea>
        </div>
        <div>
            <button type="submit">Create Project</button>
        </div>
    </form>
@endsection