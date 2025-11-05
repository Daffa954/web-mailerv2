<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailMessage extends Model
{
    //
    protected $fillable = [
        'full_name',
        'student_email',
        'password',
        'birth_date'

    ];
    
}
