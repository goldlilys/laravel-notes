{{-- Create notes display --}} 
@extends('layout'); 
@section('content')
<h1>Welcome to Notes</h1>
<ul>
    @foreach ($notes as $note)
    <li>
        {{ $note }}
    </li>
    @endforeach
</ul>
@endsection