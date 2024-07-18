<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Avantage;
use Illuminate\Support\Facades\Storage;

class AvantageController extends Controller
{
    
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string|max:255',
            'image' => 'required|image|max:3072', // 3 MB max
        ]);

        $path = $request->file('image')->store('avantages');

        $avantage = new Avantage;
        $avantage->avantage_produit = $request->type;
        $avantage->image_avantage = $path;
        $avantage->save();

        return redirect()->back()->with('success', 'Avantage ajouté avec succès.');
    }
}
