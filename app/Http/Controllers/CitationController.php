<?php

namespace App\Http\Controllers;

use App\Models\Citation;
use Illuminate\Http\Request;

class CitationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('Citation.index');
    }


    public function create()
    {
        return view('Citation.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'auteur' => 'string |max:250 |required',
            'description' => 'string |max:1000 |required'
        ]);

        Citation::create([
            'auteur' => $request->auteur,
            'description' => $request->description,
            'status' => $request->status == 'on' ? 1 : 0
        ]);

        return redirect()->route('index')->with('success','Citation enregistrer avec success');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Citation $citation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Citation $citation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Citation $citation)
    {
        //
    }
}
