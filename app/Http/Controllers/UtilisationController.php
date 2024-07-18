<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisation; // Update model import
use Illuminate\Support\Facades\Storage;

class UtilisationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'emploi_1' => 'required|string|max:255',
            'emploi_2' => 'required|string|max:255', 
        ]);

      
        $utilisation = new Utilisation; // Update model instantiation
        $utilisation->mode_emploi_1 = $request->emploi_1;
        $utilisation->mode_emploi_2 = $request->emploi_2;
        $utilisation->save();

        return redirect()->back()->with('success', 'Utilisation ajoutée avec succès.'); // Update success message
    }
}
