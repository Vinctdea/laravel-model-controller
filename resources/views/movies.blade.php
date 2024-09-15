@extends('layouts.main')
@section('content')
    <div class="container">

        @foreach ($movies as $movie)
            <div class="card" style="width: 18rem;">
                <img src="#" class="card-img-top" alt="{{ $movie->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <p class="card-text">{{ $movie->description }}</p>

                </div>
            </div>
        @endforeach


    </div>
@endsection
