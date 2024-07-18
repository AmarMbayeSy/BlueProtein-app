<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Precaution extends Model
{
    use HasFactory;

    protected $fillable = [
        'precaution_produit',
        'image_precaution',
    ];
    public function produits()
    {
        return $this->hasMany(Produit::class, 'id_avantage');
    }
}
