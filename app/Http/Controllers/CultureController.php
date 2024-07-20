<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Culture;
use Illuminate\Support\Facades\Storage;

class CultureController extends Controller
{
    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            'type' => 'required|string|max:255',
            'image' => 'required|image|max:3072', // 3 MB max
        ]);

        $path = $request->file('image')->store('cultures','public');

        $culture = new Culture;
        $culture->culture_produit = $request->type;
        $culture->image_culture = $path;
        $culture->save();

        return redirect()->back()->with('success', 'Culture ajoutée avec succès.');
    }
}
