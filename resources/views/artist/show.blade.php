@extends('layouts.admin')

@section('content')
    <p class="text-center py-5 text-white">
        Info su:
    </p>
    <h4 class="text-center fw-bolder text-white">
        {{ $artist->name }}
    </h4>
    <div class="text-white text-center">
        <h5 class="mb-3">Elenco opere</h5>
        <div class="row d-flex justify-content-center">
            @forelse ($artist->artworks as $artwork)
                <div class="col-3">
                    <div class="card h-100" >
                        <img src="https://source.unsplash.com/random/300x300" class="card-img-top" alt="...">
                        <div class="card-body text-dark">
                            <h5 class="card-title fw-bold">{{ $artwork->name }}</h5>
                            <h6> {{ $artwork->year }} </h6>
                            <p class="card-text"> {{ $artwork->description }} </p>
                            <a href="{{route('admin.artist.show', $artist)}}" class="btn btn-primary">Vedi</a>
                        </div>
                    </div>
                </div>
            @empty
                <li>Nessun risultato trovato</li>
            @endforelse
        </div>
    </div>


    <div class="d-flex justify-content-center py-5">
        <a class="btn btn-warning" href="{{route('admin.artist.edit', $artist)}}">MODIFICA</a>
        <a class="btn btn-danger mx-3" href="">ELIMINA</a>
    </div>
@endsection
