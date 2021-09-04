@extends('layouts.main')
@section('container')
<div class="maps" id="maps"></div>

<script>
  let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: -34.397, lng: 150.644 },
    zoom: 8,
  });
}
</script>
@endsection
