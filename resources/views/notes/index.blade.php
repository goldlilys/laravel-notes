{{-- Create notes display --}}
@extends('layout');
@section('content')
<h1 class="title">Notes</h1>
<div class="lists">
    @foreach ($notes as $note)
    <div class="item"> <a href="/notes/{{$note->id}}">{{$note->title}}</a> <a href="/notes/{{$note->id}}/edit">(Edit)</a> </div>
    @endforeach
</div>
<div class="ops"> <a href="/notes/create" class="btn btn-primary">Create Note</a> </div>
@endsection
