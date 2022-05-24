@extends('layout.main')
@section('contenu')

<div class="container">
    <h2 class="text-center mt-3 text-primary shadow p-3 mb-5 bg-body rounded">Liste du personnel</h2>
    <table class="table shadow p-3 mb-5 bg-body rounded" id="myTable">
        <thead>
            <tr>
                <th scope="col">Numéro</th>
                <th scope="col">Matricule</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Genre</th>
                <th scope="col">Poste</th>
                <th scope="col">Titre</th>
                <th scope="col">Photo</th>
                <th colspan="3">Actions</th>

            </tr>
        </thead>
        <tbody>
            @foreach($gestion_persos as $gestion_perso)
            <tr>
                <th scope="row">{{$gestion_perso->id}}</th>
                <td>{{$gestion_perso->matricule}}</td>
                <td>{{$gestion_perso->nom}}</td>
                <td>{{$gestion_perso->prenom}}</td>
                <td>{{$gestion_perso->genre}}</td>
                <td>{{$gestion_perso->poste}}</td>
                <td>{{$gestion_perso->titre}}</td>
                <td><img src="{{asset('storage').'/'.$gestion_perso->photo}}" style="width:30px;height:30px" alt=""></td>
                <td> <a class="button" href="/gestion_persos/{{ $gestion_perso->id }}"><img src="{{ asset('Images/more.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                <td> <a class="button" href="/gestion_persos/{{ $gestion_perso->id }}" onclick="return confirm('Voulez-vous modifier?');"><img src="{{ asset('Images/edit.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                <td><a class="button" href="{{url('supprimer_personnel/'.$gestion_perso->id) }}"><img src="{{ asset('Images/del.png') }}" style="width:30px;height:30px" alt=""></a></td>
                @endforeach
        </tbody>
    </table>
</div>

@endsection
