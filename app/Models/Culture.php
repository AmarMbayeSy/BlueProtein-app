<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Culture extends Model
{
    use HasFactory;
    public function produits()
    {
        return $this->hasMany(Produit::class, 'id_avantage');
    }
}
