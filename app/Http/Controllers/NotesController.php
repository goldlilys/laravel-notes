<?php

namespace App\Http\Controllers;

use App\Note;

class NotesController extends Controller
{
    /**
     * Display a listing of notes.
     */
    public function index()
    {
        // PSR-4 use App\Note above so can call Note simply
        $notes = Note::all();

        return view('notes.index', compact('notes'));
    }

    /**
     * Show the form for creating a new note.
     */
    public function create()
    {
        return view('notes.create');
    }

    /**
     * Display the specified note using Route Model Binding
     * This is able to recognize which note it's referencing without explicitly calling $id
     *
     * @param  Note $note
     */
    public function show(Note $note)
    {
        return view('notes.show', compact('note'));
    }

    /**
     * Show the form for editing the specified note using Route Model Binding
     *
     * @param  Note  $note
     */
    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }

    /**
     * Update the specified note in storage.
     *
     * @param  Note  $note
     */
    public function update(Note $note)
    {
        $note->title = request('title');
        $note->description = request('description');

        $note->save(); // always call at the end for update functions

        return redirect('/notes');

    }

    /**
     * Remove the specified note from storage using Route Model Binding
     *
     * @param  Note  $note
     */
    public function destroy(Note $note)
    {
        $note->delete();

        return redirect('/notes');
    }

    /**
     * Save new note to storage
     * Make sure to add fillable for title and description at Note.php Model for security
     */
    public function store()
    {
        Note::create(request()->validate([
            'title' => ['required', 'min:3', 'max:255'], // can use | OR array like this
            'description' => ['required', 'min:3'],
        ]));

        return redirect('/notes');
    }
}
