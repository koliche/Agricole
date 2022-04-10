<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agriculteur extends Model
{
    use HasFactory;
    protected $fillable = [
        'agr_nom',
        'agr_prn',
        'agr_resid',
    ];

    public function parcelles(){
        return $this->belongsTo(parcelles::class);
    }
}
