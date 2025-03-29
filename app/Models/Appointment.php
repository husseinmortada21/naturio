<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'appointment_date',
        'appointment_time',
        'services',
        'message',
    ];
    protected $casts = [
        'services' => 'array',
    ];


}
