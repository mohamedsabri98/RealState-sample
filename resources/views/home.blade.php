@extends('layouts.app')

@section('content')
    <div>
        <a class="btn btn-outline-danger mt-5" href="{{ url('/most-viewed') }}">Most Viewed</a>
    </div>
    <div class="row">
        @foreach ($realdata as $data)
            <div class="col-md-4 mb-4">
                <div class="card mt-5">
                    <img class="rounded-5" src="{{ asset('images/img.jpeg') }}" alt="img">
                    <div class="card-body">
                        <h5 class="card-title">Property ID: {{ $data->property_id }}</h5>
                        <p class="card-text"><strong>Description:</strong> {{ $data->description }}</p>
                        <p class="card-text"><strong>Address:</strong> {{ $data->address }}</p>
                        <p class="card-text"><strong>City:</strong> {{ $data->city }}</p>
                        <p class="card-text"><strong>State:</strong> {{ $data->state }}</p>
                        <p class="card-text"><strong>ZIP Code:</strong> {{ $data->zip_code }}</p>
                        <p class="card-text"><strong>Price:</strong> ${{ $data->price }}</p>
                        <p class="card-text"><strong>Bedrooms:</strong> {{ $data->number_of_bedrooms }}</p>
                        <p class="card-text"><strong>Bathrooms:</strong> {{ $data->number_of_bathrooms }}</p>
                        <p class="card-text"><strong>Square Footage:</strong> {{ $data->square_footage }} sq ft</p>
                        <a class="btn btn-outline-danger" href="{{ url('/realstate', $data->property_id) }}">Order Now</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
