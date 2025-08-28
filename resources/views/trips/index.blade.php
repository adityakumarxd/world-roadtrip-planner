@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
  <h1 class="display-5">🚗 Road Trips</h1>
  <a href="{{ url('/trips/create') }}" class="btn btn-primary shadow-lg">+ Create New Road Trip</a>
</div>

@if($trips->count())
  <div class="row row-cols-1 row-cols-md-2 g-4">
    @foreach($trips as $trip)
      <div class="col">
        <div class="card h-100">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">{{ $trip->title }}</h5>
            <p class="card-text text-white-50 flex-grow-1">{{ Str::limit($trip->description, 150) }}</p>
            <a href="{{ url('/trips/'.$trip->id) }}" class="btn btn-primary mt-auto align-self-start shadow">View Details</a>
          </div>
          <div class="card-footer bg-transparent d-flex justify-content-between">
            <span class="badge-cool">Places: {{ $trip->places->count() ?? 0 }}</span>
            <span class="badge-cool">Reviews: {{ $trip->reviews->count() ?? 0 }}</span>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@else
  <p class="text-muted fs-5">No road trips yet. <a href="{{ url('/trips/create') }}" class="link-info">Create one now!</a></p>
@endif
@endsection
