<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Avantage;
use App\Models\Composition;
use App\Models\Utilisation;
use App\Models\Precaution;
use App\Models\Application;
use App\Models\Culture;
use App\Models\Etape;
use App\Models\Certification;
use App\Models\Bloc;
use View;

class ProduitController extends Controller
{
    // Afficher le formulaire de création
    public function create()
    {
        $avantages = Avantage::all();
        $nombreAvantages = $avantages->count();
        $compositions = Composition::all();
        $nombreCompositions = $compositions->count();
        $utilisations = Utilisation::all();
        $nombreUtilisations = $utilisations->count();
        $precautions = Precaution::all();
        $nombrePrecautions = $precautions->count();
        $applications = Application::all();
        $nombreApplications = $applications->count();
        $cultures = Culture::all();
        $nombreCultures = $cultures->count();
        $etapes = Etape::all();
        $nombreEtapes = $etapes->count();
        $certifications = Certification::all();
        $nombreCertifications = $certifications->count();
        $produits = Produit::all();
        $nombreProduits = $produits->count();
        return view('dashboard-blogen-theme-master.index', compact('avantages', 'compositions', 'utilisations',
            'precautions', 'applications', 'cultures', 'etapes', 
            'certifications', 'produits', 'nombreProduits',
            'nombreCertifications','nombreEtapes','nombreCultures',
            'nombreApplications','nombrePrecautions','nombreUtilisations',
            'nombreCompositions','nombreAvantages'));
        }

    public function create_accueil()
    {
        $avantages = Avantage::all();
        $nombreAvantages = $avantages->count();
        $compositions = Composition::all();
        $nombreCompositions = $compositions->count();
        $utilisations = Utilisation::all();
        $nombreUtilisations = $utilisations->count();
        $precautions = Precaution::all();
        $nombrePrecautions = $precautions->count();
        $applications = Application::all();
        $nombreApplications = $applications->count();
        $cultures = Culture::all();
        $nombreCultures = $cultures->count();
        $etapes = Etape::all();
        $nombreEtapes = $etapes->count();
        $certifications = Certification::all();
        $nombreCertifications = $certifications->count();
        $produits = Produit::all();
        $nombreProduits = $produits->count();
        $blocs = Bloc::all();
        $nombreBlocs = $blocs->count();
        
        $etape = Etape::where('etape_produit', 'Germination')->first();
        if ($etape) {
            $germinations = Produit::where('id_etape', $etape->id)->get();
        } else {
            $germinations = collect();
        }
   
        return View::make('site.try')->with(compact('avantages', 'compositions', 'utilisations',
            'precautions', 'applications', 'cultures', 'etapes', 
            'certifications', 'produits', 'nombreProduits',
            'nombreCertifications','nombreEtapes','nombreCultures','germinations',
            'nombreApplications','nombrePrecautions','nombreUtilisations',
            'nombreCompositions','nombreAvantages','blocs','nombreBlocs'));
    }

    public function Show_produit_per_etape() {
        $produits = Produit::all();
        $etape = Etape::where('etape_produit', 'Germination')->first();
        if ($etape) {
            $germinations = Produit::where('id_etape', $etape->id)->get();
        } else {
            $germinations = collect();
        }

        $etape = Etape::where('etape_produit', 'Semis')->first();
        if ($etape) {
            $semis = Produit::where('id_etape', $etape->id)->get();
        } else {
            $semis = collect();
        }

        $etape = Etape::where('etape_produit', 'Floraison')->first();
        if ($etape) {
            $floraisons = Produit::where('id_etape', $etape->id)->get();
        } else {
            $floraisons = collect();
        }

        $etape = Etape::where('etape_produit', 'Vegetative')->first();
        if ($etape) {
            $vegetatives = Produit::where('id_etape', $etape->id)->get();
        } else {
            $vegetatives = collect();
        }
        return view('site.produits', compact('vegetatives', 'floraisons',
                        'semis','germinations','produits'));
        
    }

    public function show($id_produits)
    {
        $produit = Produit::findOrFail($id_produits);
        return view('site.produit1', compact('produit'));
    }
    
    

    // Stocker le produit
    public function store(Request $request)
    {
        $request->validate([
            'nom_produit' => 'required|string|max:255',
            'image_produit' => 'required|image|max:3072',
            'id_avantage_1' => 'required|exists:avantages,id',
            'id_composition_1' => 'required|exists:compositions,id',
            'id_utilisation_1' => 'required|exists:utilisations,id',
            'id_precaution_1' => 'required|exists:precautions,id',
            'description1_produit' => 'required|string',
            'description2_produit' => 'required|string|max:255',
            'id_application' => 'required|exists:applications,id',
            'id_culture' => 'required|exists:cultures,id',
            'id_etape' => 'required|exists:etapes,id',
            'id_certification_1' => 'required|exists:certifications,id',
            'id_avantage_2' => 'nullable|exists:avantages,id',
            'id_avantage_3' => 'nullable|exists:avantages,id',
            'id_avantage_4' => 'nullable|exists:avantages,id',
            'id_avantage_5' => 'nullable|exists:avantages,id',
            'id_avantage_6' => 'nullable|exists:avantages,id',
            'id_composition_2' => 'nullable|exists:compositions,id',
            'id_composition_3' => 'nullable|exists:compositions,id',
            'id_composition_4' => 'nullable|exists:compositions,id',
            'id_composition_5' => 'nullable|exists:compositions,id',
            'id_composition_6' => 'nullable|exists:compositions,id',
            'id_utilisation_2' => 'nullable|exists:utilisations,id',
            'id_utilisation_3' => 'nullable|exists:utilisations,id',
            'id_utilisation_4' => 'nullable|exists:utilisations,id',
            'id_utilisation_5' => 'nullable|exists:utilisations,id',
            'id_utilisation_6' => 'nullable|exists:utilisations,id',
            'id_precaution_2' => 'nullable|exists:precautions,id',
            'id_precaution_3' => 'nullable|exists:precautions,id',
            'id_precaution_4' => 'nullable|exists:precautions,id',
            'id_precaution_5' => 'nullable|exists:precautions,id',
            'id_precaution_6' => 'nullable|exists:precautions,id',
            'id_certification_2' => 'nullable|exists:certifications,id',
        ]);

        // Gérer le téléchargement de l'image
        $imagePath = $request->file('image_produit')->store('produit_images', 'public');

        // Créer le produit
        $produit = new Produit();
        $produit->nom_produit = $request->input('nom_produit');
        $produit->image_produit = $imagePath;
        $produit->id_avantage_1 = $request->input('id_avantage_1');
        $produit->id_avantage_2 = $request->input('id_avantage_2');
        $produit->id_avantage_3 = $request->input('id_avantage_3');
        $produit->id_avantage_4 = $request->input('id_avantage_4');
        $produit->id_avantage_5 = $request->input('id_avantage_5');
        $produit->id_avantage_6 = $request->input('id_avantage_6');
        $produit->id_composition_1 = $request->input('id_composition_1');
        $produit->id_composition_2 = $request->input('id_composition_2');
        $produit->id_composition_3 = $request->input('id_composition_3');
        $produit->id_composition_4 = $request->input('id_composition_4');
        $produit->id_composition_5 = $request->input('id_composition_5');
        $produit->id_composition_6 = $request->input('id_composition_6');
        $produit->id_utilisation_1 = $request->input('id_utilisation_1');
        $produit->id_utilisation_2 = $request->input('id_utilisation_2');
        $produit->id_utilisation_3 = $request->input('id_utilisation_3');
        $produit->id_utilisation_4 = $request->input('id_utilisation_4');
        $produit->id_utilisation_5 = $request->input('id_utilisation_5');
        $produit->id_utilisation_6 = $request->input('id_utilisation_6');
        $produit->id_precaution_1 = $request->input('id_precaution_1');
        $produit->id_precaution_2 = $request->input('id_precaution_2');
        $produit->id_precaution_3 = $request->input('id_precaution_3');
        $produit->id_precaution_4 = $request->input('id_precaution_4');
        $produit->id_precaution_5 = $request->input('id_precaution_5');
        $produit->id_precaution_6 = $request->input('id_precaution_6');
        $produit->description1_produit = $request->input('description1_produit');
        $produit->description2_produit = $request->input('description2_produit');
        $produit->id_application = $request->input('id_application');
        $produit->id_culture = $request->input('id_culture');
        $produit->id_etape = $request->input('id_etape');
        $produit->id_certification_1 = $request->input('id_certification_1');
        $produit->id_certification_2 = $request->input('id_certification_2');
        $produit->save();

        return redirect()->back()->with('success', 'Produit ajouté avec succès.');
    }

    // Supprimer un produit
    public function destroy($id)
    {
        $produit = Produit::findOrFail($id);
        $produit->delete();

        return redirect()->back()->with('success', 'Produit supprimé avec succès.');
    }
}
