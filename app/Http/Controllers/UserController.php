<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $liste_users = User::all();

        return view('users', [
            'Users' => $liste_users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users/create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->name);
        $user = new User();
        $user->name = request('name');
        $user->email = request('email');
        $user->password = password_hash(request('password'), PASSWORD_BCRYPT, ['size' => 12]);

        error_log($user);
        //dd($user);
        $user->save();
        return redirect(route('users.index'))->with('success', 'Utilisateur ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('users/edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        error_log($user);
        return redirect(route('users.index'))->with('success', 'Utilisateur mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $user = User::findOrFail($id);
        $user->delete();

        //dd($user);

        return redirect(route('users.index'))->with('success', 'Utilisateur supprimé avec succès');
    }

    // public function update()
    // {
    //     $u_users = User::all();

    //     return view('users/update', ['users' => $u_users]);
    // }
}
