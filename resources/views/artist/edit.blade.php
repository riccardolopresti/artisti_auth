@extends('layouts.admin')

@section('content')
    <div class="mb-3 w-50 m-auto">
        <form action="{{ route('admin.artist.update', $artist) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="name" class="form-label">NOME ARTISTA</label>
            <input name="name" type="text" class="form-control my-3" id="name" placeholder="Modifica nome artista" value={{old('name', $artist->name)}}>
            <button class="btn btn-success" type="submit">Aggiorna</button>
        </form>
    </div>
@endsection
