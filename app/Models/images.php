<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    
    public $timestamps = false;
    protected $fillable = ['src', 'alt', 'class'];
    use HasFactory;
    
}
