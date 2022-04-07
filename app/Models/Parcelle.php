<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcelle extends Model
{
    use HasFactory;
    protected $fillable = [
        'par_nom',
        'par_lieu',
        'par_superficie',
    ];
}
