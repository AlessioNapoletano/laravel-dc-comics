@extends('layouts.guest')

@section('title', 'Pagina Per Gli Utenti')

@section('main-content')

<header class="bg-primary text-light mb-3 py-3 d-flex justify-content-between aling-items-center">
    <h1 class="d-inle ">
        header
    </h1>

    <div class="button">
        <a class="d-inline ms-end btn btn-success" href="{{ route('comics.index') }}">Pagina per Admin</a>  
    </div>
    
</header>

<main>
    <section class="home-content">
        <div class="container">
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-4">
                        <div class="card mb-4">
                            <img src="{{ $comic->thumb }}" class="card-img-top img-fluid" alt="{{ $comic->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $comic->title }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    
</main>



@endsection