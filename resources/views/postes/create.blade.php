<!-- //@extends('layouts.app') -->



<h1 class="text-center">Ajout d'un nouveau PC</h1>


<form method="post" action="/postes">
    @csrf
    <div class="form-group">
        <label for="nom_pc">Nom du poste : </label>
        <input class="form-control" type="text" id="nom_pc" name="nom_pc">
    </div>

    <div class="form-group">
        <label for="Adresse_ip">Adresse IP : </label>
        <input class="form-control" type="text" id="Adresse_ip" name="Adresse_ip">
    </div>

    <button class="btn btn-primary">Valider</button>

</form>