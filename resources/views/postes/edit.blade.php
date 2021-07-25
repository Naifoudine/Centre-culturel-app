@extends('layouts.app')

@section('content1')
<div class="container mt-5">
    <form method="post" action="{{ route('postes.update', $poste->id ) }}">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="nom_pc">Nom du PC : </label>
            <input class="form-control" type="text" id="nom_pc" name="nom_pc" value="{{ $poste->nom_pc }}">
        </div>
        <div class="form-group">
            <label for="Adresse_ip">Adresse IP : </label>
            <input class="form-control" type="text" id="Adresse_ip" name="Adresse_ip" value="{{ $poste->Adresse_ip }}">
        </div>

        <button type="submit" class="btn btn-primary float-right">Appliquer les modifications</button>
    </form>
</div>

@endsection