<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Precaution;
use Illuminate\Support\Facades\Storage;

class PrecautionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string|max:255',
            'image' => 'required|image|max:3072', // 3 MB max
        ]);

        $path = $request->file('image')->store('precautions');

        $precaution = new Precaution;
        $precaution->precaution_produit = $request->type;
        $precaution->image_precaution = $path;
        $precaution->save();

        return redirect()->back()->with('success', 'Precaution ajoutee avec succes.');
    }
}
