@extends('layouts.app')

@section('title' , 'DC Comics')

@section('main-content')

    <section class="comics container-lg">
            <div class="comic">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">title</th>
                            <th scope="col">price</th>
                            <th scope="col">sale_date</th>
                            <th scope="col">Collegamento</th>
                        </tr>
                    </thead>

                    @foreach ($comics as $comic)
                    <tbody>
                        <tr>
                            <td>{{ $comic->id }}</td>
                            <td>{{ $comic->title }}</td>
                            <td>{{ $comic->price }}</td>
                            <td>{{ $comic->sale_date }}</td>
                            <td> 
                                <a class="btn btn-primary" href="{{ route('comics.show', $comic->id) }}">
                                    show
                                </a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach 
                </table>
            </div>
        
    </section>
    
@endsection