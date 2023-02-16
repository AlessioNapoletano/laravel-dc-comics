@extends('layouts.app')

@section('title', 'Creazione Record')

@section('main-content')

<div class="container">
    <div class="title">
        <h1 class="text-center my-3">
            Crea un nuovo comic
        </h1>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
    
        <div class="mb-3">
            <label for="title" class="form-label fw-bold">Titolo: </label>
            <input type="text" id="title" name="title" class="form-control" placeholder="Inserire il Titolo" value="{{ old('title') }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label fw-bold">Descrizione: </label>
            <textarea type="text" id="description" name="description" class="form-control"> 
                {{ old('description')}}
            </textarea>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label fw-bold">Thumb URL: </label>
            <input type="text" id="thumb" name="thumb" class="form-control" placeholder="Inserire il path dell'immagine" value="{{ old('thumb') }}">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label fw-bold">Prezzo: </label>
            <input type="number" id="price" name="price" class="form-control" placeholder="Inserire il prezzo" value="{{ old('price') }}">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label fw-bold">Serie: </label>
            <input type="text" id="series" name="series" class="form-control" placeholder="Inserire la serie" value="{{ old('series') }}">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label fw-bold">Data Di Uscita: </label>
            <input type="text" id="sale_date" name="sale_date" class="form-control" placeholder="inserire la data di uscita" value="{{ old('sale_date') }}">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label fw-bold">Tipo: </label>
            <input type="text" id="type" name="type" class="form-control" placeholder="inserire il tipo" value="{{ old('type') }}">
        </div>
        
        <button class="btn-primary btn">Invia</button>
    </form>
</div>


@endsection