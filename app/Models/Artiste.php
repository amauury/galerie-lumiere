<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artiste extends Model
{
    protected $fillable = ['nom', 'image'];
    
    public function oeuvres()
    {
        return $this->hasMany(Oeuvre::class);
    }
}