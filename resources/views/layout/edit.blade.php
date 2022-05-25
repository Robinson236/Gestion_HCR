@extends('layout.main')
@section('contenu')
<h1>Editer le profil de {{ $personnel->name }}</h1>
<form action="{{ route('personnel.update', ['personnel' => $personnel->id]) }}" method="POST"
     enctype="multipart/form-data">
     @method('PATCH')
     @include('includes.form')
     <button type="submit" class="btn btn-primary">Sauvegarder les informations</button>
</form>
<img src="{{ asset('img/imag.jpg') }}" class="d-block w-100" height="500px" alt="">
@endsection