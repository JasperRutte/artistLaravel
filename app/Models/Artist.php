<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Artist extends Model
{
    use HasFactory;

    protected $table = 'artists'; // Adjust this to match your table name
    // Define other attributes, relationships, and methods as needed
    protected $fillable = ['id', 'naam', 'bandleden', 'genre', 'platenmaatschappij_id']; // List of attributes that can be mass-assigned

    public function platenmaatschappij (){
        return $this -> hasOne(Platenmaatschappij::class, 'id', 'platenmaatschappij_id');
    }
}
