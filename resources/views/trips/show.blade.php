@extends('layouts.app')

@section('content')
<a href="{{ url('/trips') }}">← Back to all trips</a>

<h1>{{ $trip->title }}</h1>
<p>{{ $trip->description }}</p>

<h3>Places</h3>
@if($trip->places->count() > 0)
    <ul>
    @foreach($trip->places as $place)
        <li><b>{{ $place->place_name }}</b>: {{ $place->place_description }}</li>
    @endforeach
    </ul>
@else
    <p>No places added yet.</p>
@endif

<h3>Add Review</h3>
<form action="{{ url('/trips/'.$trip->id.'/reviews') }}" method="POST">
    @csrf
    <label>Rating (1-5):</label><br>
    <input type="number" name="rating" min="1" max="5" required><br><br>

    <label>Comment:</label><br>
    <textarea name="comment" rows="3"></textarea><br><br>

    <button type="submit">Submit Review</button>
</form>

<h3>Reviews</h3>
@if($trip->reviews->count() > 0)
    <ul>
    @foreach($trip->reviews as $review)
        <li><b>Rating:</b> {{ $review->rating }}<br>{{ $review->comment }}</li><hr>
    @endforeach
    </ul>
@else
    <p>No reviews yet.</p>
@endif
@endsection
