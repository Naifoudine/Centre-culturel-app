@extends('layouts.app')

<h1 class="text-center">Ajout un nouvel utilisateur</h1>

<form method="post" action="{{ route('postes.store') }}">
    @csrf
    <div class="form-group">
        <label for="name">Nom d'utilisateur : </label>

        <input class="form-control" type="text" id="name" name="name" value="{{ $users->name }}">
        <!-- <select name="namec" id="namec">


            @foreach ($attributions as $attribution)
            dd($attributions);
            <option name="namec" id="namec" value="{{ $attribution->id }}"> {{ $attribution-> name}} </option>
            @endforeach
        </select> -->
    </div>

    <div class="form-group">
        <label for="email">Adresse mail : </label>
        <input class="form-control" type="text" id="email" name="email">
    </div>

    <input type="hidden" id="id" name="id">
    <button class="btn btn-primary">Valider</button>

</form>