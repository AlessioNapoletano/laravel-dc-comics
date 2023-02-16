@extends('layouts.app')

@section('title', 'Pagina di modifica')

@section('main-content')

<div class="container">

    <div class="title">
        <h3 class="text-center my-3">
            Modifica a {{ $comic->title }}
        </h3>
    </div>

    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
    
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label fw-bold">Titolo: </label>
            <input type="text" id="title" name="title" class="form-control" 
            value="{{ old('title') ?? $comic->title }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label fw-bold">Descrizione: </label>
            <input type="text" id="description" name="description" class="form-control" 
            value="{{ old('description') ?? $comic->description }}">
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label fw-bold">Thumb URL: </label>
            <input type="text" id="thumb" name="thumb" class="form-control" 
            value="{{ old('thumb') ?? $comic->thumb }}">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label fw-bold">Prezzo: </label>
            <input type="number" id="price" name="price" class="form-control" 
            value="{{ old('price') ?? $comic->price }}">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label fw-bold">Serie: </label>
            <input type="text" id="series" name="series" class="form-control" 
            value="{{ old('series') ?? $comic->series }}">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label fw-bold">Data Di Uscita: </label>
            <input type="text" id="sale_date" name="sale_date" class="form-control" 
            value="{{ old('sale_date') ?? $comic->sale_date }}">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label fw-bold">Tipo: </label>
            <input type="text" id="type" name="type" class="form-control" 
            value="{{ old('type') ?? $comic->type }}">
        </div>
        
        <button type="sumbit" class="btn-primary btn">Invia</button>
    </form>
</div>

@endsection