<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<h1 class="text-center">Ordinateurs</h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom PC</th>
            <th scope="col">Adresse IP</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Computers as $Computer)
        <tr>

            <th scope="row">{{$Computer->id }}</th>
            <td>{{$Computer->nom_pc}}</td>
            <td>{{$Computer->Adresse_ip}}</td>

            <td>
                <a class="btn btn-warning btn-block" href="{{ route('postes.edit', $Computer->id) }}"><i class="bi bi-pencil-square"></i> Modifier</a> <br>
                <form action="{{ route('postes.destroy', $Computer->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-block mt-2" type="submit" onClick="javascript: return confirm('Voulez vous VRAIMENT supprimer cet ordinateur ?');">Supprimer</button>
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>