<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use Illuminate\Support\Facades\Storage;

class ApplicationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string|max:255',
            'image' => 'required|image|max:3072', // 3 MB max
        ]);

        $path = $request->file('image')->store('applications','public');

        $application = new Application;
        $application->application_produit = $request->type;
        $application->image_application = $path;
        $application->save();

        return redirect()->back()->with('success', 'Application ajoutée avec succès.');
    }
}
