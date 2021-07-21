@extends('layouts.main')

@section('main-content')
    <form class="create-edit" action="{{route('comics.store')}}" method="POST">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo">
        </div>
        <div class="form-group">
            <label for="title">Informazioni</label>
            <textarea type="text" name="description"  class="form-control" id="title" placeholder="Inserisci informazioni sull'articolo"></textarea>
        </div>
        <div class="form-group">
            <label for="title">URL</label>
            <input type="text" name="thumb" class="form-control" id="title" placeholder="Inserisci l'URL dell'immagine">
        </div>
        <div class="form-group">
            <label for="title">Prezzo</label>
            <input type="number" name="price" class="form-control" step="0.01" id="title" placeholder="Inserisci il prezzo">
        </div>
        <div class="form-group">
            <label for="title">Serie</label>
            <input type="text" name="series" class="form-control" id="title" placeholder="Inserisci la serie dell'articolo">
        </div>
        <div class="form-group">
            <label for="title">Data di acquisto</label>
            <input type="text" name="sale_date" class="form-control" id="title" placeholder="Inserisci la data di acquisto">
        </div>
        <div class="form-group">
            <label for="title">Tipologia</label>
            <input type="text" name="type" class="form-control" id="title" placeholder="Inserisci la tipologia">
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
@endsection