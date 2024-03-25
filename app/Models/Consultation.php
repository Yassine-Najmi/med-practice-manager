<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;
    protected $table = 'consultations';
    protected $fillable = [
        'patient_id',
        'situation',
        'antécédents',
        'motif',
        'examen_clinick',
        'examen_biologique',
        'examen_radiologique',
        'diagnostique',
        'traitment'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
