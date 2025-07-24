<?php

namespace App\Http\Controllers;

use App\Models\Citation;
use Illuminate\Http\Request;

class CitationController extends Controller
{
   
    public function index()
    {
        $citations =Citation::all();
        return view('citation.index',compact('citations'));
    }


    public function create()
    {
        return view('citation.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'auteur' => 'string |max:250 |required',
            'description' => 'string |max:1000 |required'
        ]);

        Citation::create([
            'auteur' => $request-> auteur,
            'description' => $request->description,
            'status' => $request-> status == 'on' ? 1 : 0
        ]);

        return redirect()->route('index')->with('success','Citation enregistrer avec success');
    }


   
    public function edit(int $id)
    {
        $citation = Citation::where('id',$id)->first();
        
        return view('citation.create',compact('citation'));
    }

   
    public function update(Request $request, int $id)
    {
         $request->validate([
            'auteur' => 'string |max:250 |required',
            'description' => 'string |max:1000 |required'
        ]);

         $citation = Citation::where('id',$id)->first();

         $citation->update([
            'auteur' => $request-> auteur,
            'description' => $request->description,
            'status' => $request-> status == 'on' ? 1 : 0

         ]);

          return redirect()->route('index')->with('success','Citation modifier avec success');
    }

   
    public function destroy(int $id)
    {
        Citation::where('id',$id)->delete();
        return redirect()->route('index')->with('success','Citation supprimee avec success');

    }
}
