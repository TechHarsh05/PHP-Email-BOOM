<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Email extends Model
{
    use HasFactory;

    //  Optional: if your table name is not "emails", you can specify it
    // protected $table = 'emails';

    // Allow mass assignment (optional if using `create()` or `fill()`)
    protected $fillable = ['email'];
}
