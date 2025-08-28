@extends('layouts.app')

@section('content')
<h2>Create New Road Trip</h2>
<form action="{{ url('/trips') }}" method="POST">
    @csrf
    <label>Title:</label><br>
    <input type="text" name="title" required><br><br>

    <label>Description:</label><br>
    <textarea name="description" rows="3"></textarea><br><br>

    <h4>Places</h4>
    <div id="places">
        <input type="text" name="places[0][place_name]" placeholder="Place Name" required>
        <input type="text" name="places[0][place_description]" placeholder="Place Description"><br><br>
    </div>

    <button type="button" onclick="addPlace()">+ Add Another Place</button><br><br>
    <button type="submit">Create Trip</button>
</form>

<script>
let placeIndex = 1;
function addPlace() {
    let container = document.getElementById('places');
    let html = `
        <input type="text" name="places[${placeIndex}][place_name]" placeholder="Place Name" required>
        <input type="text" name="places[${placeIndex}][place_description]" placeholder="Place Description"><br><br>
    `;
    container.insertAdjacentHTML('beforeend', html);
    placeIndex++;
}
</script>
@endsection
