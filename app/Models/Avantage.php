<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avantage extends Model
{
    use HasFactory;

    protected $fillable = [
        'avantage_produit',
        'image_avantage',
    ]; 
    public function produits()
    {
        return $this->hasMany(Produit::class, 'id_avantage');
    }

}
