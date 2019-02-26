{{-- Create a note's display --}}
@extends('layout');
@section('content')
<h1 class="title">{{$note->title}}</h1>
<div class="content">
    <div>{{$note->description}}</div>
</div>
<div class="ops"> <a href="/notes/{{$note->id}}/edit" class="btn btn-primary">Edit Note</a></div>
@endsection
