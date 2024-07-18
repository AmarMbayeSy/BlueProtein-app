<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $table = 'produits';

    protected $fillable = [
        'nom_produit',
        'image_produit',
        'id_avantage',
        'id_composition',
        'id_utilisation',
        'id_precaution',
        'description1_produit',
        'description2_produit',
        'id_application',
        'id_culture',
        'id_etape',
        'id_certification',
    ];

    public function avantage()
    {
        return $this->belongsTo(Avantage::class, 'id_avantage');
    }

    public function composition()
    {
        return $this->belongsTo(Composition::class, 'id_composition');
    }

    public function utilisation()
    {
        return $this->belongsTo(Utilisation::class, 'id_utilisation');
    }

    public function precaution()
    {
        return $this->belongsTo(Precaution::class, 'id_precaution');
    }

    public function application()
    {
        return $this->belongsTo(Application::class, 'id_application');
    }

    public function culture()
    {
        return $this->belongsTo(Culture::class, 'id_culture');
    }

    public function etape()
    {
        return $this->belongsTo(Etape::class, 'id_etape');
    }

    public function certification()
    {
        return $this->belongsTo(Certification::class, 'id_certification');
    }
}
