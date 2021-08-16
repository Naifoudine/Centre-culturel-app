@extends('layouts.app1')

@section('content1')
<div class="container mt-5">
    <form method="post" action="{{ route('users.update', $user->id ) }}">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="name">Nom d'utilisateur : </label>
            <input class="form-control" type="text" id="name" name="name" value="{{ $user->name }}">
        </div>
        <div class="form-group">
            <label for="email">Adresse mail : </label>
            <input class="form-control" type="text" id="email" name="email" value="{{ $user->email }}">
        </div>

        <div class=" form-group">
            <label for="password">Mot de Passe : </label>
            <input class="form-control" type="password" id="password" name="password">
        </div>
        <button type=" submit" class="btn btn-primary float-right">Appliquer les modifications</button>
    </form>
</div>

@endsection