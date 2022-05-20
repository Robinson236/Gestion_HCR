<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<link rel="stylesheet" href="{{ asset('style/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('style/bootstrap/css/bootstrap.css') }}">

<body>

    <h2 style="text-align: center;">Listes du personnel</h2>



    <div class="container">
      <a href="formulaire">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Formulaire</button>
      </a>
        <table class="table">
          <table id="myTable" class="table table-striped table-bordered table-hover" style="background-color: white;">
            <thead>
              <tr>
                <th scope="col">numero</th>
                <th scope="col">matricule</th>
                <th scope="col">nom</th>
                <th scope="col">prenom</th>
                <th scope="col">age</th>
                <th scope="col">titre</th>
                <th scope="col">telephone</th>
                <th scope="col">adresse</th>
                <th scope="col">email</th>
                <th scope="col">photo</th>
              </tr>
            </thead>
            <tbody>
              @foreach($personnels as $personnel)
              <tr>
                <th scope="row">{{$personnel->id}}</th>
                <td>{{$personnel->matrucule}}</td>
                <td>{{$personnel->nom}}</td>
                <td>{{$personnel->prenom}}</td>
                <td>{{$personnel->age}}</td>
                <td>{{$personnel->titre}}</td>
                <td>{{$personnel->telephone}}</td>
                <td>{{$personnel->adresse}}</td>
                <td>{{$personnel->email}}</td>
                <td>{{$personnel->photo}}</td>
              </tr>
              @endforeach

            </tbody>
          </table>
    </div>
</body>
</html>
