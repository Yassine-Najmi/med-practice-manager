<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $table = 'appointments';

    protected $fillable = [
        'patient_id',
        'date',
        'time'
    ];

    protected $casts = [
        'time' => 'datetime:H:i'
    ];


    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
