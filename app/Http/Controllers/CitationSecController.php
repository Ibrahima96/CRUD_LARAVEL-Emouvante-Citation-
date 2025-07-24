<?php

namespace App\Http\Controllers;

use App\Http\Requests\CitationResquest;
use App\Models\Citation;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class CitationSecController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('citation.index', ['citations' => Citation::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('citation.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CitationResquest $request)
    {
        $request->Validated($request->all());

        Citation::create([
            'auteur' => $request->auteur,
            'description' => $request->description,
            'status' => $request->status == 'on' ? 1 : 0
        ]);

        return redirect()->route('index')->with('success', 'Citation enregistrer avec success');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Citation $citation)
    {

        return view('citation.create', compact('citation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CitationResquest $request, Citation $citation)
    {
        $request->validated($request->all());

        $citation->update([
            'auteur' => $request->auteur,
            'description' => $request->description,
            'status' => $request->status == 'on' ? 1 : 0

        ]);

        return redirect()->route('index')->with('success', 'Citation modifier avec success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Citation $citation)
    {
        $citation->delete();
         return redirect()->route('index')->with('success','Citation supprimee avec success');
    }
}
