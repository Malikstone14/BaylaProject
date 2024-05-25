<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeTexte extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'home_titre', 'home_texte'
    ];
}
