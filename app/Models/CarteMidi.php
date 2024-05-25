<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarteMidi extends Model
{
    use HasFactory;
    public $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = [
        'id', 'nom', 'ordre','active', 'section', 'ingredient'
    ];
}
