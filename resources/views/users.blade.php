{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

@extends('layouts.app1')

@section('content1')
<h1 class="text-center">Utilisateurs</h1>

@if (session('error'))
    <div class="alert alert-succes">
        {{ session('error') }}
    </div>
@elseif(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a class="btn btn-primary" href="{{ route('users.create') }}"><i class="bi bi-plus-square"></i>Ajouter une nouvel utilisateur</a>
</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom d'utilisateur</th>
            <th scope="col">Adresse mail</th>
            <th scope="col">Ajouté depuis...</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Users as $User)
        <tr>

            <th scope="row">{{$User->id }}</th>
            <td>{{$User->name}}</td>
            <td>{{$User->email}}</td>
            <td>{{$User->created_at}}</td>
            <td><a class="btn btn-warning btn-block" href="{{ route('users.edit', $User->id) }}"><i class="bi bi-pencil-square"></i> Modifier</a> <br>
                <form action="{{ route('users.destroy', $User->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-block mt-2" type="submit" onClick="javascript: return confirm('Voulez vous VRAIMENT supprimer cet utilisateur ?');">Supprimer</button>
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection