{{-- Create new note --}}
@extends('layout');
@section('content')
<h1 class="title">Create Note</h1>
<form action="/notes" method="POST">
    @csrf
    <div class="form-group">
        <div class="field">
            <label for="title">Title</label>
            <input class="form-text form-control" type="text" name="title" placeholder="Note Title" value="{{ old('title') }}" required
            />
        </div>
        <div class="field">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" value="{{ old('description') }}" required></textarea>
        </div>
        <div class="field">
            <button type="submit" class="btn btn-primary">Create Note</button>
            <a href="/notes" class="btn btn-secondary">Cancel</a>
        </div>
    </div>
    @if ($errors->any())
    <div class="notification bg-danger text-white rounded">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }} </li>
            @endforeach
        </ul>
    </div>
    @endif

</form>
@endsection
