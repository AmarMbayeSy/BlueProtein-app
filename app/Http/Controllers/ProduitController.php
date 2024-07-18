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

class ProduitController extends Controller
{
    // Afficher le formulaire de création
    public function create()
    {
        $avantages = Avantage::all();
        $compositions = Composition::all();
        $utilisations = Utilisation::all();
        $precautions = Precaution::all();
        $applications = Application::all();
        $cultures = Culture::all();
        $etapes = Etape::all();
        $certifications = Certification::all();
        $produits = Produit::all();
        $nombreProduits = $produits->count();
        return view('dashboard-blogen-theme-master.index', compact('avantages', 'compositions', 'utilisations', 'precautions', 'applications', 'cultures', 'etapes', 'certifications', 'produits','nombreProduits'));
    }

    // Stocker le produit
    public function store(Request $request)
    {
        $request->validate([
            'nom_produit' => 'required|string|max:255',
            'image_produit' => 'required|image|max:3072',
            'id_avantage' => 'required|exists:avantages,id',
            'id_composition' => 'required|exists:compositions,id',
            'id_utilisation' => 'required|exists:utilisations,id',
            'id_precaution' => 'required|exists:precautions,id',
            'description1_produit' => 'required|string',
            'description2_produit' => 'required|string|max:255',
            'id_application' => 'required|exists:applications,id',
            'id_culture' => 'required|exists:cultures,id',
            'id_etape' => 'required|exists:etapes,id',
            'id_certification' => 'required|exists:certifications,id',
            'id_avantage_2' => 'required|exists.avantages,id',
            'id_avantage_3' => 'required|exists.avantages,id',
        ]);

        // Gérer le téléchargement de l'image
        $imagePath = $request->file('image_produit')->store('produit_images', 'public');

        // Créer le produit
        $produit = new Produit();
        $produit->nom_produit = $request->input('nom_produit');
        $produit->image_produit = $imagePath;
        $produit->id_avantage = $request->input('id_avantage');
        $produit->id_composition = $request->input('id_composition');
        $produit->id_utilisation = $request->input('id_utilisation');
        $produit->id_precaution = $request->input('id_precaution');
        $produit->description1_produit = $request->input('description1_produit');
        $produit->description2_produit = $request->input('description2_produit');
        $produit->id_application = $request->input('id_application');
        $produit->id_culture = $request->input('id_culture');
        $produit->id_etape = $request->input('id_etape');
        $produit->id_certification = $request->input('id_certification');
        $produit->save();

        return redirect()->back()->with('success', 'Produit ajouté avec succès.');
    }

    // Supprimer un produit
    public function destroy($id)
    {
        $produit = Produit::findOrFail($id);
        $produit->delete();

        return redirect()->back()->with('success', 'Produit supprimer avec succès.');
    }
}
