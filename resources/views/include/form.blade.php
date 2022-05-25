<div>
    <select name="id">
        @foreach ($personnels as $personnel)
            <option value="{{ $personnel->id }}"
                {{ $personnel->id = $personnel->id ? 'selected' : '' }}> {{ $personnel->name }}
            </option>
        @endforeach
    </select>
    @error('id')
        <div class="invalid-feedback">
            {{ $errors->first('id') }}
        </div>
    @enderror
</div>
<div class="form-group">
    <div class="custom-file">
        <input type="file" name="image" class="custom-file-input @error('image') is-invalid @enderror" 
        id="validatedCustomFile">
        <label class="custom-file-label" for="validatedCustomFile">Choisir une photo...</label>
        @error('image')
        <div class="invalid-feedback">{{ $errors->first('image')}}</div>
        @enderror
    </div>
</div
