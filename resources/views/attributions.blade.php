<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<h1 class="text-center">Attributions</h1>

<!-- <style>
    .mybtn-right {
        text-align: right;
    }
</style>
<div class="mybtn-right"><a class="btn btn-primary" href="{{ route('attributions.create') }}"> 
Ajouter une nouvelle attribution</a> </div>-->

<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a class="btn btn-primary" href="{{ route('attributions.create') }}"><i class="bi bi-plus-square"></i>Ajouter une nouvelle attribution</a>
</div>


<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Utilisateur</th>
            <th scope="col">Poste</th>
            <th scope="col">Date</th>
            <th scope="col">À partir de</th>
            <th scope="col">Jusqu'a</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($attributions as $attribution)
        <tr>

            <th scope="row">{{$attribution->id }}</th>
            <td>{{$attribution->name}}</td>
            <td>{{$attribution->nom_pc}}</td>
            <td>{{$attribution->date}}</td>
            <td>{{$attribution->heureDebut}}</td>
            <td>{{$attribution->heureFin}}</td>
            <td><a class="btn btn-warning btn-block" href="{{ route('attributions.edit', $attribution->id) }}"><i class="bi bi-pencil-square"></i> Modifier</a> <br>
                <form action="{{ route('attributions.destroy', $attribution->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-block mt-2" type="submit" onClick="javascript: return confirm('Voulez vous VRAIMENT supprimer cet ordinateur ?');">Supprimer</button>
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>