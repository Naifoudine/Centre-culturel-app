<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    public function index()
    {
        $liste_PC = Computer::all();

        // dd($attribution);
        return view('postes', [
            'Computers' => $liste_PC
        ]);
    }

    public function create()
    {
        return view('postes/create');
    }

    public function store(Request $request)
    {
        $poste = new Computer();
        $poste->nom_pc = request('nom_pc');
        $poste->Adresse_ip = request('Adresse_ip');

        error_log($poste);
        // dd($poste);
        $poste->save();
        return redirect(route('postes.index'))->with('message', 'Poste ajouté !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\  $poste
     * @return \Illuminate\Http\Response
     */
    public function show(Computer $poste)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Computer  $poste
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $poste = Computer::findOrFail($id);

        //dd($poste);

        return view('postes/edit', compact('poste'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Computer  $poste
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $poste = Computer::find($id);
        $poste->nom_pc = $request->nom_pc;
        $poste->Adresse_ip = $request->Adresse_ip;
        $poste->save();

        error_log($poste);
        return redirect(route('postes.index'))->with('success', 'Ordinateur mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Computer  $poste
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $poste = Computer::findOrFail($id);
        $poste->delete();

        //dd($poste);

        return redirect(route('postes.index'))->with('success', 'Ordinateur supprimé avec succès');
    }
}
