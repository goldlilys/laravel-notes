{{-- Edit this note with id --}}
@extends('layout');
@section('content')
<h1 class="title">Edit Note</h1>
<form method="POST" action="/notes/{{ $note->id }}">
    @csrf @method('PATCH') {{-- Patch is editing resource --}}

    <div class="form-group">
        <div class="field">
            <label for="title">Title</label>
            <input class="form-text form-control" type="text" name="title" placeholder="Title" value="{{ $note->title }}" required />
        </div>
        <div class="field">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" required>{{ $note->description }}</textarea>
        </div>
        <div class="field">
            <button type="submit" class="btn btn-primary">Update Note</button>
            <a href="/notes/{{ $note->id }}" class="btn btn-secondary">Cancel</a>
        </div>
    </div>
</form>

<form method="POST" action="/notes/{{ $note->id }}">
    @csrf @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete Note</button>
</form>
@endsection
