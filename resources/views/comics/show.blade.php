@extends('layouts.main')

@section('main-content')
    <div class="container">
        <h1 class="title-comic">{{ $comic->title }}</h1>

        <div>
            <div>
                <img class="img-comic" src="{{ $comic->thumb }}" alt="{{$comic->title }}">
            </div>
            <div>
                <h4>Serie</h4>
                <p>{{ $comic->series }} &deg;</p>
                <h4>Prezzo</h4>
                <p>{{ $comic->price }} &euro;</p>
                <h4>Descrizione</h4>
                <p>{{ $comic->description }}</p>
            </div>
        </div>

        <div class="next-prev">
        
            <a href="{{route('comics.show', $comic->id - 1)}}">PRECEDENTE</a>
            <a href="{{route('comics.show', $comic->id + 1)}}">SUCCESSIVO</a>
             
        </div>
       
        <div class="back-home">
            <a  href="{{ route("comics.index") }}">Torna all'elenco</a>
        </div>
    </div>
@endsection