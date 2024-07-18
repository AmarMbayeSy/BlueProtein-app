<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisation extends Model
{
    use HasFactory;

    protected $fillable = [
        'mode_emploi_1',
        'mode_emploi_2',
    ];
    public function produits()
    {
        return $this->hasMany(Produit::class, 'id_avantage');
    }
}
