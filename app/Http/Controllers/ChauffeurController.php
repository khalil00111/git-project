<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chauffeur;

class ChauffeurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chauffeur = chauffeur::all();
        return view('chauffeur.index')->with('chauffeur', $chauffeur);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('chauffeur.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        chauffeur::create($input);
        return redirect('chauffeur')->with('flash_message', 'chauffeur Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chauffeur = chauffeur::find($id);
        return view('chauffeur.show')->with('chauffeur', $chauffeur);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chauffeur = chauffeur::find($id);
        return view('chauffeur.edit')->with('chauffeurs', $chauffeur);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $chauffeur = chauffeur::find($id);
        $input = $request->all();
        $chauffeur->update($input);
        return redirect('chauffeur')->with('flash_message', 'chauffeur Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        chauffeur::destroy($id);
        return redirect('chauffeur/')->with('flash_message', 'chauffeur deleted!');
    }
}
