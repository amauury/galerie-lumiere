<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oeuvre extends Model
{
    protected $fillable = ['artiste_id', 'nom', 'prix', 'date_creation', 'lieu_creation', 'image_oeuvre'];
    
    public function artiste()
    {
        return $this->belongsTo(Artiste::class);
    }
}