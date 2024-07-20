<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Composition;
use Illuminate\Support\Facades\Storage;

class CompositionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string|max:255',
            'image' => 'required|image|max:3072', // 3 MB max
        ]);

        $path = $request->file('image')->store('compositions', 'public');

        $composition = new Composition;
        $composition->composition_produit = $request->type;
        $composition->image_composition = $path;
        $composition->save();

        return redirect()->back()->with('success', 'Composition ajoutée avec succès.');
    }
}
