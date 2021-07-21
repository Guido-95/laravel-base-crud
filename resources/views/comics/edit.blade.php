@extends('layouts.main')



@section('main-content')
    <form class="create-edit" action="{{route('comics.update',$comic->id)}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" value='{{$comic->title}}'class="form-control" id="title" name="title" placeholder="Inserisci il titolo">
        </div>
        <div class="form-group">
            <label for="description">Informazioni</label>
            <textarea type="text" name="description"  class="form-control" id="description" placeholder="Inserisci informazioni sull'articolo">{{$comic->description}}</textarea>
        </div>
        <div class="form-group">
            <label for="img">URL</label>
            <input type="text" value='{{$comic->thumb}}' name="thumb" class="form-control" id="img" placeholder="Inserisci l'URL dell'immagine">
        </div>
        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="number" value='{{$comic->price}}' name="price" class="form-control" step="0.01" id="price" placeholder="Inserisci il prezzo">
        </div>
        <div class="form-group">
            <label for="series">Serie</label>
            <input type="text" value='{{$comic->series}}' name="series" class="form-control" id="series" placeholder="Inserisci la serie dell'articolo">
        </div>
        <div class="form-group">
            <label for="sale_date">Data di acquisto</label>
            <input type="text" value='{{$comic->sale_date}}'name="sale_date" class="form-control" id="sale_date" placeholder="Inserisci la data di acquisto">
        </div>
        <div class="form-group">
            <label for="type">Tipologia</label>
            <input type="text" value='{{$comic->type }}' name="type" class="form-control" id="type" placeholder="Inserisci la tipologia">
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
@endsection