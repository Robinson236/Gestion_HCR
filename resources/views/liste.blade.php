@extends('layouts.main')
@section('contenu')

<div class="container">
    @if (Session::has('supprimer'))
    <span>{{ Session::get('supprimer') }}</span>

    @endif
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Genre</th>
            <th scope="col">Poste</th>
            <th scope="col">Titre</th>
            <th scope="col">Matricule</th>
            <th scope="col">Photo</th>
            <th colspan="3">Actions</th>

          </tr>
        </thead>
        <tbody>
         @foreach($personnels as $personnel)
         <tr>
            <th scope="row">{{$personnel->id}}</th>
            <td>{{$personnel->nom}}</td>
            <td>{{$personnel->prenom}}</td>
            <td>{{$personnel->genre}}</td>
            <td>{{$personnel->poste}}</td>
            <td>{{$personnel->titre}}</td>
            <td>{{$personnel->matricule}}</td>
            <td><img src="{{ asset('storage').'/'.$personnel->photo }}" style="width: 20%" alt=""></td>
            <td> <a class="button" href="/personnels/{{ $personnel->id }}"><img src="{{ asset('img/more.png') }}" style="width:30px;height:30px" alt=""></a> </td>
            <td> <a class="button" href="/personnels/{{ $personnel->id }}" onclick="return confirm('Voulez-vous modifier?');"><img src="{{ asset('img/edit.png') }}" style="width:30px;height:30px" alt=""></a> </td>
            <td><a class="button" href="{{url('supprimer_personnel/'.$personnel->id) }}"><img src="{{ asset('img/del.png') }}" style="width:30px;height:30px" alt=""></a></td>
          </tr>
         @endforeach
        </tbody>
      </table>
</div>

@endsection
