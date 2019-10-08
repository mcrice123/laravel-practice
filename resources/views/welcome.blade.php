@extends('layout')



@section('content')
    <div class="title m-b-md">
        My First Website 
    </div>
    <ul>
        @foreach($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>
@endsection