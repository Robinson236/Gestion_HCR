<html>
    <head>
        <title>formulaire</title>
        <link rel="stylesheet" href="{{ asset('style/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('style/bootstrap/css/bootstrap.css') }}">

    </head>
    <body>
        <h1 style="text-align:center">Formulaire du personnel</h1>

        <div class="container">
            <a href="liste">
                <button class="btn btn-danger mb-3">liste du personnel</button>
            </a>
            <form method="POST" action="{{ route('liste') }}">
                @csrf
                <div class="row">
                    <div class="form-group col-lg-6">
                      <label for="nom">Matricul</label>
                      <input type="texte" class="form-control" name="matricul" placeholder="matricul">
                    </div>
                    <div class="form-group col-lg-6">
                      <label for="nom">Nom</label>
                      <input type="texte" class="form-control" name="nom" placeholder="nom">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-6">
                      <label for="prenom">Prenom</label>
                      <input type="texte" class="form-control" name="prenom" placeholder="prenom">
                    </div>
                    <div class="form-group col-lg-6">
                      <label for="age">Age</label>
                      <input type="number" class="form-control" name="age" placeholder="age">
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="poste">Poste</label>
                        <input type="texte" class="form-control" name="poste" placeholder="poste">
                      </div>

                      <div class="form-group col-lg-6">
                        <label for="titre">Titre</label>
                        <input type="texte" class="form-control" name="titre" placeholder="titre">
                      </div>
                </div>

                <div class="row">
                    <div class="form-group col-lg-6">
                        <label for="telephone">Telephone</label>
                        <input type="number" class="form-control" id="telephone" placeholder="telephone">
                    </div>

                    <div class="form-group col-lg-6">
                        <label for="inputEmail4">Adresse</label>
                        <input type="adresse" class="form-control" id="inputEmail4" placeholder="adresse">
                    </div>

                    <div class="form-group col-lg-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                    </div>

                    <div class="form-group col-lg-6">
                        <label for="inputEmail4">Photo</label>
                        <input type="img" class="form-control" id="inputEmail4" placeholder="photo">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-1">
                        <input type="submit" class="btn btn-primary" value="valider">
                    </div>
                    <div class="col-lg-1">
                        <button type="submit" class="btn btn-primary">annuler</button>
                    </div>


                </div>

              </form>
        </div>


    </body>
</html>
