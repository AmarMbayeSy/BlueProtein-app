<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certification;
use Illuminate\Support\Facades\Storage;

class CertificationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:3072', // 3 MB max
            'type' => 'required|string|max:255',
        ]);

        $path = $request->file('image')->store('certifications');

        $certification = new Certification;

        $certification->certification_produit = $request->type;
        $certification->image_certification = $path;
        $certification->save();

        return redirect()->back()->with('success', 'Certification ajouté avec succès.');
    }
}
