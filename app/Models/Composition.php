<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Composition extends Model
{
    use HasFactory;

    protected $fillable = [
        'composition_produit',
        'image_composition',
    ];
    public function produits()
    {
        return $this->hasMany(Produit::class, 'id_avantage');
    }
}
