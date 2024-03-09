<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    public function fournisseur()
    {
        return $this->belongsTo(Fournisseur::class);
    }

    protected $fillable = [
        'fournisseur_id',

    ];

    protected $appends = [
        'fournisseur_name',
    ];

    public function getFournisseurNameAttribute()
    {
        return $this->fournisseur->name;
    }
}
