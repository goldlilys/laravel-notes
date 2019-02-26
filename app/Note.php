<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    // For security validation of fields
    protected $fillable = ['title', 'description'];
}
