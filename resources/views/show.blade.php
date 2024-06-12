@extends('layouts.app')

@section('content')
<div class="mt-5">
    <img class="rounded-5 " src="{{ asset('images/img.jpeg') }}" alt="img" width="300px" height="200px">
    <h1>Property Details</h1>
    <p> <strong> Property ID: </strong> {{ $property->property_id }}</p>
    <p><strong>Description:</strong> {{ $property->description }}</p>
    <p><strong>Address: </strong>{{ $property->address }}</p>
    <p><strong>City: </strong>{{ $property->city }}</p>
    <p><strong>State: </strong>{{ $property->state }}</p>
    <p><strong>Zip code:</strong> {{ $property->zip_code }}</p>
    <p><strong>Price:</strong> {{ $property->price }}</p>
    <p><strong>Number of bedrooms: </strong>{{ $property->number_of_bedrooms }}</p>
    <p><strong>Number of bathrooms: </strong>{{ $property->number_of_bathrooms }}</p>
    <p><strong>Square Footage: </strong>{{ $property->square_footage }}</p>
</div>
@endsection
