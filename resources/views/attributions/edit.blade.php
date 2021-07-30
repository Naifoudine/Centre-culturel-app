@extends('layouts.app')

@section('content1')
<div class="container mt-5">
    <h1 class="text-center">Edition d'une attribution</h1>

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
    <form method="post" action="{{route('attributions.update', $attribution->id)}}">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="user_id">Nom d'utilisateur : </label>

            <select name="user_id" class="form-control custom-select">

                <option value=""> --- Choisissez un utilisateur --- </option>
                @foreach($Users as $User)
                <option name="user_id" id="user_id" value="{{ $User->id }}" @if(old('User')==$User->id || $User->id == $attribution->user_id) selected @endif>
                    {{ $User->name }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="pc_id">Nom du poste : </label>
            <select name="pc_id" id="pc_id" class="form-control custom-select">

                <option value=""> --- Choisissez un Ordinateur --- </option>
                @foreach($Computers as $Computer)
                <option name="pc_id" id="pc_id" value="{{ $Computer->id }}" @if(old('Computer')==$Computer->id || $Computer->id == $attribution->pc_id) selected @endif>
                    {{ $Computer->nom_pc }}
                </option>
                @endforeach

            </select>

        </div>

        <div class="form-group">
            <label for="date">Date :</label>
            <input class="form-control" type="date" id="date" name="date" value="{{ $attribution->date }}">
        </div>

        <div class=" form-group">
            <label for="heureDebut">À partir de :</label>
            <input class="form-control" type="time" id="heureDebut" name="heureDebut" min="08:00" max="18:00" value="{{ $attribution->heureDebut }}">
        </div>

        <div class=" form-group">
            <label for="heureFin">Jusqu'à :</label>
            <input class="form-control" type="time" id="heureFin" name="heureFin" min="08:00" max="18:00" value="{{ $attribution->heureFin }}">
        </div>


        <button type=" submit" class="btn btn-primary float-right">Appliquer les modifications</button>
    </form>
</div>

@endsection