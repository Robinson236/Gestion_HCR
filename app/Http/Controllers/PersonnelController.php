<?php

namespace App\Http\Controllers;

use App\Models\Personnel;
use Illuminate\Http\Request;

class PersonnelController extends Controller
{

    public function index()
    {
        return view('liste', [
            'personels' => Personnel::all()
        ]);
    }


    public function create()
    {
        return view('formulaire');
    }

    public function store(Request $request)
    {
        Personnel::create($request->all());
        return redirect()->route('liste');
    }

    public function show(Personnel $personnel)
    {
        return view('personnels.show',compact('personnel'));
    }

    public function edit(Personnel $personnel)
    {
        return view('personnels.edit',compact('personnel'));
    }

    public function update(Request $request, Personnel $personnel)
    {
        $request->validate([

        ]);

        $personnel->update($request->all());

        return redirect()->route('personnels.index')
        ->with('success','Personnel updated successfully.');
    }

    public function destroy(Personnel $personnel)
    {
        $personnel->delete();

        return redirect()->route('etudiants.index')
        ->with('success','Personnel deleted successfully.');
    }
}
