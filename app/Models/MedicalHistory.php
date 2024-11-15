<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MedicalHistory extends Model
{
    protected $fillable = ['remarks', 'date', 'time'];

    protected $casts=[
        'date' => 'date',
        'time' => 'time',
    ];
}
