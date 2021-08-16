@extends('layouts.app1')


@section('content1')
<h1 class="text-center">Ajout un nouvel utilisateur</h1>


<form method="post" action="{{ route('users.index') }}">
    @csrf
    <div class="form-group">
        <label for="name">Nom d'utilisateur : </label>

        <input class="form-control" type="text" id="name" name="name">

    </div>

    <div class="form-group">
        <label for="email">Adresse mail : </label>
        <input class="form-control" type="text" id="email" name="email">
    </div>

    <div class="form-group">
        <label for="password">Mot de Passe : </label>
        <input class="form-control" type="password" id="password" name="password">
    </div>

    <button class="btn btn-primary">Valider</button>

</form>
@endsection