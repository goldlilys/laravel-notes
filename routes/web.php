<?php

Route::get('/', 'PagesController@home');

Route::get('/about', 'PagesController@about');

Route::get('/contact', 'PagesController@contact');

/* Create all routes for CRUD and Route Model Binding */
Route::resource('notes', 'NotesController');

/* resource above is same as below */
// Route::get('/notes', 'NotesController@index');
// Route::get('/notes/create', 'NotesController@create');
/* When saving a note after creation is using POST */
// Route::post('/notes', 'NotesController@store');

// Route::get('/notes/{note}/edit', 'NotesController@edit');    // route to edit form
// Route::patch('/notes/{note}'. 'NotesController@update');  // to update data stored
// Route::delete('/notes/{note}', 'NotesController@destroy');    // to delete data

/* Move these logic to the PagesController.php for static pages */
// Route::get('/about', function () {
//     return view('about');
// });
