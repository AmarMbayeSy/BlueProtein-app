<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etape;
use Illuminate\Support\Facades\Storage;

class EtapeController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string|max:255',
            'image' => 'required|image|max:3072', // 3 MB max
        ]);

        $path = $request->file('image')->store('etapes','public');

        $etape = new Etape;
        $etape->etape_produit = $request->type;
        $etape->image_etape = $path;
        $etape->save();

        return redirect()->back()->with('success', 'Etape ajouté avec succès.');
    }
}
