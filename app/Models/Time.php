<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    use HasFactory;

    protected $fillable = ['week_id', 'time'];

    public function week()
    {
        return $this->belongsTo(Week::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
