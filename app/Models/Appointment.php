<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['date', 'time', 'reasons'];

    protected $casts=[
        'date' => 'date',
        'time' => 'time',
    ];

}
