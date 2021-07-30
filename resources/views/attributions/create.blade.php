@extends('layouts.app')

@section('content1')

<h1 class="text-center">Ajout d'une nouvelle attribution</h1>

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<form method="post" action="{{ route('attributions.index') }}">
    @csrf
    <div class="form-group">
        <label for="user_id">Nom d'utilisateur : </label>
        <select name="user_id" id="user_id" value="{{ old('user_id') }}">

            @foreach ($Users as $User)
            <option name="user_id" id="user_id" value="{{ $User->id }}"> {{ $User->name }} </option>
            @endforeach
        </select>
    </div>



    <div class="form-group">
        <label for="pc_id">Nom du poste : </label>
        <select name="pc_id" id="pc_id" value="{{ old('pc_id') }}">

            @foreach ($Computers as $Computer)
            <option name="pc_id" id="pc_id" value="{{ $Computer->id }}"> {{ $Computer->nom_pc}} </option>
            @endforeach

        </select>

    </div>

    <div class="form-group">
        <label for="date">Date :</label>
        <input class="form-control" type="date" id="date" name="date" value="{{ old('date') }}">
    </div>

    <div class="form-group">
        <label for="heureDebut">À partir de :</label>
        <input class="form-control" type="time" id="heureDebut" name="heureDebut" min="08:00" max="18:00" value="{{ old('heureDebut') }}">
    </div>

    <div class="form-group">
        <label for="heureFin">Jusqu'à :</label>
        <input class="form-control" type="time" id="heureFin" name="heureFin" min="08:00" max="18:00" value="{{ old('heureFin') }}">
    </div>

    <input type="hidden" id="id_attribution" name="id_attribution">
    <button class="btn btn-primary">Valider</button>

</form>

@endsection