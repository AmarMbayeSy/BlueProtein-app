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
        'id_avantage_1',
        'id_avantage_2',
        'id_avantage_3',
        'id_avantage_4',
        'id_avantage_5',
        'id_avantage_6',
        'id_composition_1',
        'id_composition_2',
        'id_composition_3',
        'id_composition_4',
        'id_composition_5',
        'id_composition_6',
        'id_utilisation_1',
        'id_utilisation_2',
        'id_utilisation_3',
        'id_utilisation_4',
        'id_utilisation_5',
        'id_utilisation_6',
        'id_precaution_1',
        'id_precaution_2',
        'id_precaution_3',
        'id_precaution_4',
        'id_precaution_5',
        'id_precaution_6',
        'description1_produit',
        'description2_produit',
        'id_application',
        'id_culture',
        'id_etape',
        'id_certification_1',
        'id_certification_2',
    ];

    // Relations for Avantages
    public function avantage1()
    {
        return $this->belongsTo(Avantage::class, 'id_avantage_1');
    }

    public function avantage2()
    {
        return $this->belongsTo(Avantage::class, 'id_avantage_2');
    }

    public function avantage3()
    {
        return $this->belongsTo(Avantage::class, 'id_avantage_3');
    }

    public function avantage4()
    {
        return $this->belongsTo(Avantage::class, 'id_avantage_4');
    }

    public function avantage5()
    {
        return $this->belongsTo(Avantage::class, 'id_avantage_5');
    }

    public function avantage6()
    {
        return $this->belongsTo(Avantage::class, 'id_avantage_6');
    }

    // Relations for Compositions
    public function composition1()
    {
        return $this->belongsTo(Composition::class, 'id_composition_1');
    }

    public function composition2()
    {
        return $this->belongsTo(Composition::class, 'id_composition_2');
    }

    public function composition3()
    {
        return $this->belongsTo(Composition::class, 'id_composition_3');
    }

    public function composition4()
    {
        return $this->belongsTo(Composition::class, 'id_composition_4');
    }

    public function composition5()
    {
        return $this->belongsTo(Composition::class, 'id_composition_5');
    }

    public function composition6()
    {
        return $this->belongsTo(Composition::class, 'id_composition_6');
    }

    // Relations for Utilisations
    public function utilisation1()
    {
        return $this->belongsTo(Utilisation::class, 'id_utilisation_1');
    }

    public function utilisation2()
    {
        return $this->belongsTo(Utilisation::class, 'id_utilisation_2');
    }

    public function utilisation3()
    {
        return $this->belongsTo(Utilisation::class, 'id_utilisation_3');
    }

    public function utilisation4()
    {
        return $this->belongsTo(Utilisation::class, 'id_utilisation_4');
    }

    public function utilisation5()
    {
        return $this->belongsTo(Utilisation::class, 'id_utilisation_5');
    }

    public function utilisation6()
    {
        return $this->belongsTo(Utilisation::class, 'id_utilisation_6');
    }

    // Relations for Précautions
    public function precaution1()
    {
        return $this->belongsTo(Precaution::class, 'id_precaution_1');
    }

    public function precaution2()
    {
        return $this->belongsTo(Precaution::class, 'id_precaution_2');
    }

    public function precaution3()
    {
        return $this->belongsTo(Precaution::class, 'id_precaution_3');
    }

    public function precaution4()
    {
        return $this->belongsTo(Precaution::class, 'id_precaution_4');
    }

    public function precaution5()
    {
        return $this->belongsTo(Precaution::class, 'id_precaution_5');
    }

    public function precaution6()
    {
        return $this->belongsTo(Precaution::class, 'id_precaution_6');
    }

    // Relations for other entities
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

    // Relations for Certifications
    public function certification1()
    {
        return $this->belongsTo(Certification::class, 'id_certification_1');
    }

    public function certification2()
    {
        return $this->belongsTo(Certification::class, 'id_certification_2');
    }
}
