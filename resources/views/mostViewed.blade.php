@extends('layouts.app')

@section('content')
    @foreach ($mostViewedItems as $item)
        <div class="col-md-4 mb-4">
            <div class="card mt-5">
                <img class="rounded-5" src="{{ asset('images/img.jpeg') }}" alt="img">
                <div class="card-body">
                    <h5 class="card-title">Property ID: {{ $item->property_id }}</h5>
                    <p class="card-text"><strong>Description:</strong> {{ $item->description }}</p>
                    <p class="card-text"><strong>Address:</strong> {{ $item->address }}</p>
                    <p class="card-text"><strong>City:</strong> {{ $item->city }}</p>
                    <p class="card-text"><strong>State:</strong> {{ $item->state }}</p>
                    <p class="card-text"><strong>ZIP Code:</strong> {{ $item->zip_code }}</p>
                    <p class="card-text"><strong>Price:</strong> ${{ $item->price }}</p>
                    <p class="card-text"><strong>Bedrooms:</strong> {{ $item->number_of_bedrooms }}</p>
                    <p class="card-text"><strong>Bathrooms:</strong> {{ $item->number_of_bathrooms }}</p>
                    <p class="card-text"><strong>Square Footage:</strong> {{ $item->square_footage }} sq ft</p>
                    <a class="btn btn-outline-danger" href="{{ url('/realstate', $item->property_id) }}">Order Now</a>
                </div>
            </div>
        </div>
    @endforeach
@endsection
