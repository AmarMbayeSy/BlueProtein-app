<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bloc;
use Illuminate\Support\Facades\Storage;

class BlocController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'contenu' => 'required|string',
            'image' => 'required|image|max:3072', // 3 MB max
            ]);

        $path = $request->file('image')->store('Blocs', 'public');

        $Blocs = new Bloc;
        $Blocs->titre_bloc= $request->titre;
        $Blocs->contenu_bloc = $request->contenu;
        $Blocs->image_bloc = $path;
        $Blocs->save();

        return redirect()->back()->with('success', 'Bloc ajoutée avec succès.');
    }

    
    public function create_actualite()
    {
        $blocs = Bloc::all();
        $nombreBlocs = $blocs->count();
        return view('site.try', compact('blocs','nombreBlocs'));
    }
}
