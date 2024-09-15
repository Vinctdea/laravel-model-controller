{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')



@section('content')
    <div class="container my-5">
        <h1>Titolo</h1>
        <img src="{{ Vite::asset('resources/img/colibri.jpg') }}" alt="" class="img-fluid">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, soluta! Enim molestias, reiciendis animi nihil
            sed veritatis, ipsum pariatur quisquam molestiae hic illo, iure doloremque beatae? Cum reiciendis, nihil debitis
            commodi consectetur, odio, nesciunt quasi exercitationem ratione quas modi eius incidunt id laudantium a
            voluptates tempora voluptatibus est obcaecati similique!
        </p>
    </div>
@endsection


@section('titlePage')
    home
@endsection
