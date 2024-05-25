<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarteAlcool extends Model
{
    use HasFactory;
    public $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = [
        'id', 'nom', 'ordre','active', 'prix', 'ingredient','prix2','cl','section','biere'
    ];
}
