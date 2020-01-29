<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class story extends Model
{
    protected $fillable = ['title', 'subject', 'body', 'publish'];
}
