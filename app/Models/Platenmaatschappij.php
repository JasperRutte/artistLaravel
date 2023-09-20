<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Platenmaatschappij extends Model
{
    use HasFactory;

    protected $table = 'platenmaatschappij'; // Adjust this to match your table name
    // Define other attributes, relationships, and methods as needed
    protected $fillable = ['id', 'platenmaatschappij']; // List of attributes that can be mass-assigned

    public function allArtists(): HasMany
    {
        return $this->hasMany(Artist::class);
    }
}
