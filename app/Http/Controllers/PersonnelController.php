<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnel;


class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('liste', [
            'personnels' => Personnel::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formulaire');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Personnel::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'genre' => $request->genre,
            'titre' => $request->titre,
            'poste' => $request->poste,
            'matricule' => $request->matricule,
            'photo' => $request->photo->store('img_personnel','public')

        ]);
        return redirect()->route('liste');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('show', [
            'finds' => Personnel::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $personnel = Personnel::where('id', $id)->firstorfail()->delete();
          echo ("Personnel Record deleted successfully.");
          return redirect()->route('gestion_personnel.index');

    }
}
