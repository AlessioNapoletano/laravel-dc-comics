@extends('layouts.app')

@section('title', 'Creazione Record')

@section('main-content')

<div class="container">
    <div class="title">
        <h1 class="text-center my-3">
            Crea un nuovo comic
        </h1>
    </div>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
    
        <div class="mb-3">
            <label for="title" class="form-label fw-bold">Titolo: </label>
            <input type="text" id="title" name="title" class="form-control">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label fw-bold">Descrizione: </label>
            <input type="text" id="description" name="description" class="form-control">
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label fw-bold">Thumb URL: </label>
            <input type="text" id="thumb" name="thumb" class="form-control">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label fw-bold">Prezzo: </label>
            <input type="number" id="price" name="price" class="form-control">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label fw-bold">Serie: </label>
            <input type="text" id="series" name="series" class="form-control">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label fw-bold">Data Di Uscita: </label>
            <input type="text" id="sale_date" name="sale_date" class="form-control">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label fw-bold">Tipo: </label>
            <input type="text" id="type" name="type" class="form-control">
        </div>
        
        <button class="sumbit btn-primary btn">Invia</button>
    </form>
</div>


@endsection