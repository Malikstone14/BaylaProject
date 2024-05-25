<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarteBoisson extends Model
{
    use HasFactory;
    use HasFactory;
    public $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = [
        'id', 'nom', 'ordre','active', 'prix', 'ingredient','prix1','section'
    ];
}
