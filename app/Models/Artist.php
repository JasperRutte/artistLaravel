<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $table = 'artists'; // Adjust this to match your table name
    // Define other attributes, relationships, and methods as needed
    protected $fillable = ['id', 'naam', 'bandleden', 'genre', 'platenmaatschappij']; // List of attributes that can be mass-assigned

}
