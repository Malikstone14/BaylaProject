<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrousel extends Model
{
    use HasFactory;
    public $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = [
        'id', 'titre', 'texte', 'ordre', 'chemin', 'active', 'URL'
    ];
}
