<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Revendeur;

class RevendeurController extends Controller
{
    /**
     * Store a newly created reseller in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'region' => 'required|string|max:255',
        ]);

        $reseller = new Revendeur;
        $reseller->name = $request->name;
        $reseller->email = $request->email;
        $reseller->phone = $request->phone;
        $reseller->region = $request->region;
        $reseller->save();

        return redirect()->back()->with('success', 'Revendeur ajouté avec succès.');
    }
}
