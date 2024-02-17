@extends('base')

@section('content')
    <div class="bg-light p-5 mb-5 text-center">
        <div class="container">
            <h1>Agence lorem ipsum</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean commodo, massa in ultricies scelerisque, erat massa tincidunt felis, nec condimentum nisl nibh quis enim. Pellentesque fermentum mollis sem ut ornare. Quisque ipsum odio, ultricies ac ante sed, semper mattis turpis.
            </p>
        </div>
    </div>
    <div class="container">
        <h2>Nos derniers biens</h2>
        <div class="row">
            @foreach ($properties as $property)
                <div class="col">
                    @include('property.card')
                </div>
            @endforeach
        </div>
    </div>
@endsection