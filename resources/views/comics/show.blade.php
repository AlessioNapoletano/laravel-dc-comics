@extends('layouts.app')

@section('main-content')
    
    <div class="container">
        <div class="comic py-5">
            <div class="card m-auto">
                <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2 class="card-title text-center fw-bold">{{ $comic->title }}</h2>
                    <p class="card-text">{{ $comic->description }}</p>
                    <p>
                        <span class="fw-bold">
                            Prezzo: 
                        </span>
                        
                        <span>
                            {{ $comic->price }} $
                        </span>
                    </p>

                    <p>
                        <span class="fw-bold">
                            Data di Uscita: 
                        </span>
                        
                        <span>
                            {{ $comic->sale_date }}
                        </span>
                    </p>

                    <p>
                        <span class="fw-bold">
                            Serie: 
                        </span>
                        
                        <span>
                            {{ $comic->series }} 
                        </span>
                    </p>

                    <p>
                        <span class="fw-bold">
                            Tipo: 
                        </span>
                        
                        <span>
                            {{ $comic->type }} 
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    
@endsection