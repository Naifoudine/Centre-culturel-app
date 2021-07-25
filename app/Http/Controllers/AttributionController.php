<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Computer;
use App\Models\Attribution;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;

class AttributionController extends Controller
{
    public function index()
    {
        // 
        $attributions = DB::table('attributions')
            ->join('computers', 'attributions.pc_id', '=', 'computers.id')
            ->join('users', 'attributions.user_id', '=', 'users.id')
            ->select('attributions.*', 'computers.nom_pc', 'users.name')
            ->get();

        // dd($attribution);
        return view('attributions', compact('attributions'));
    }

    public function store(Request $request)
    {

        $attribution = new Attribution();
        $attribution->user_id = request('user_id');
        $attribution->pc_id = request('pc_id');
        $attribution->date = request('date');
        $attribution->heureDebut = request('heureDebut');
        $attribution->heureFin = request('heureFin');

        error_log($attribution);
        //dd($attribution);
        $attribution->save();
        return redirect(route('attributions.index'));
    }

    public function create()
    {
        // $attribution1 = Attribution::all();

        // return view('attributions/create', ['attributions' => $attribution1]);

        $attributions = DB::table('attributions')
            ->join('computers', 'attributions.pc_id', '=', 'computers.id')
            ->join('users', 'attributions.user_id', '=', 'users.id')
            ->select('attributions.*', 'computers.nom_pc', 'users.name')
            ->get();

        $Computers = Computer::all();
        $Users = User::all();

        // dd($attribution);
        return view('attributions/create', [
            'Computers' => $Computers,
            'Users' => $Users
        ])->with('message', 'Attribution ajoutée avec succès !'); //revoir messages
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\  $attributions
     * @return \Illuminate\Http\Response
     */
    public function show(Attribution $attributions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attribution  $attributions
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // //$attribution = Attribution::findOrFail($id);
        // $id_attrib = Attribution::find($id);
        // $attribution = DB::table('attributions')
        //     ->join('computers', 'attributions.pc_id', '=', 'computers.id')
        //     ->join('users', 'attributions.user_id', '=', 'users.id')
        //     ->select('attributions.*', 'computers.nom_pc', 'users.name')
        //     ->where('attributions.id', '=', $id_attrib)
        //     ->get();
        $Computers = Computer::all();
        $Users = User::all();



        // return view('attributions/edit', [
        //     'attribution' => $attribution,
        //     'Computers' => $Computers,
        //     'Users' => $Users
        // ])->with('message', 'Attribution modifiée avec succès !');

        $attribution = Attribution::findOrFail($id);

        //dd($attribution);
        return view('attributions.edit', [
            'attribution' => $attribution,
            'Computers' => $Computers,
            'Users' => $Users
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attribution  $attributions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $attributions = Attribution::find($id);
        $attributions->user_id = $request->user_id;
        $attributions->pc_id = $request->pc_id;
        $attributions->date = $request->date;
        $attributions->heureDebut = $request->heureDebut;
        $attributions->heureFin = $request->heureFin;
        $attributions->save();

        error_log($attributions);
        return redirect(route('attributions.index'))->with('success', 'Ordinateur mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attribution  $attributions
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $attribution = Attribution::findOrFail($id);
        $attribution->delete();

        //dd($attributions);

        return redirect(route('attributions.index'))->with('success', 'Ordinateur supprimé avec succès');
    }
}
