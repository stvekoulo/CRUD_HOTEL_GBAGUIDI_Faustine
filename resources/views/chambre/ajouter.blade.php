<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD HOTEL </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container">
    <div class="row">
    <div class="col s12">
                <h1>Ajouter une chambre</h1>
                <hr>

          @if (session('status'))
          <div class="alert alert-success">
          {{session('status')}}
          </div>
       @endif
          <div class="container">
    <div class="form-container">
        <form action="/chambre/ajouter_chambre_traitement" method="POST">
            @csrf

            <ul>
          @foreach ($errors->all() as $error )
          <li class="alert alert-danger"> {{$error }}
          </li>
            </ul>


            <div class="form-group">
                <label for="Nomdelhotel" class="form-label">Nom de l'hôtel</label>
                <input type="text" class="form-control" id="Nomdelhotel" name="Nomdelhotel">
            </div>

            <div class="form-group">
                <label for="Descriptiondelhotel" class="form-label">Description de l'hôtel</label>
                <input type="text" class="form-control" id="Descriptiondelhotel" name="Descriptiondelhotel">
            </div>

            <!-- ... (autres champs) ... -->

            <div class="form-group">
                <label for="Enfants_maximum_autorise" class="form-label">Enfants maximum autorisés</label>
                <input type="text" class="form-control" id="Enfants_maximum_autorise" name="Enfants_maximum_autorise">
            </div>

            <div class="form-group">
                <label for="Attributs" class="form-label">Attributs</label>
                <input type="text" class="form-control" id="Attributs" name="Attributs">
            </div>

            <div class="form-group">
                <label for="Statuts" class="form-label">Statuts</label>
                <select class="form-control" id="Statuts" name="Statuts">
                    <option value="Disponible">Disponible</option>
                    <option value="Occupée">Non disponible</option>
                </select>
            </div>

            <br> <br>

            <button type="submit" class="btn btn-primary">AJOUTER UNE CHAMBRE</button>
            <a href='{{route('Chambre.ajouter_chambre')}}' class="btn btn-danger">AJOUTER UNE CHAMBRE</a>
            <br> <br>

            <a href="/chambre" class="btn btn-danger">Revenir à la liste des chambres</a>
        </form>
    </div>
</div>

        
     
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
