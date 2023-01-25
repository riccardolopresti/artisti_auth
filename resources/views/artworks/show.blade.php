@extends('layouts.admin')

@section('content')


<div class="container text-center text-white">

    <h1>{{$artwork->name}}</h1>
    <h2>{{$artwork->year}}</h2>
    @if ($artwork->image)
        <img src="{{$artwork->image}}" alt="">
    @endif
    <h2>{{$artwork->description}}</h2>

</div>

@endsection
