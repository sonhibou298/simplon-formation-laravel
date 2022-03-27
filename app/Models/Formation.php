<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;
    public function souscategorie()
    {
        return $this->belongsTo(SousCategorie::class, 'sous_categorie_id');
    }
}
