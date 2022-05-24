<a href="{{ route('personnels.edit', ['formulaire' => $personnel->id]) }}" class="btn btn-secondary my-3">Editer</a>
<form action="{{ route('formulaire.destroy', ['formulaire' => $personnel->id]) }}" method="POST"
    style="'display: inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Supprimer</button>
</form>
<hr>
<p><strong>Email :</strong> {{ $personnel->email }} </p>
<p><strong>Personnel :</strong> {{ $personnel->personnel->name }}</p>
@if ($personnel->image)
    <img src="{{ asset('')}}" class="img-thumbnail" alt="personnel-avatar">
@endif
@endsection
