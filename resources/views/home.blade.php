@extends('adminlte::page')

@section('title', 'Vaccine Home')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div id="map"></div>
@stop

@section('css')

<script src='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.css' rel='stylesheet' />
<style>
/**
* Create a position for the map
* on the page */
#map {
    position: absolute;
top: 150px;
bottom: 0;
  width: 80%;
}
</style>
@stop

@section('js')
<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiaGFqaWJhciIsImEiOiJjajcxbGtpZ3AwMm1iMnFtbmhoanhjZm03In0.PP21CG13VVtfaH4tB94InA';
    var map = new mapboxgl.Map({
        container: 'map', // container id
        style: 'mapbox://styles/hajibar/ck2x4n9ti11x61dmravvmzjml', // replace this with your style URL
        center: [120.457, 15.792], // starting position
        zoom: 10.8, // starting zoom
        attributionControl: false
    });

    // var marker = new mapboxgl.Marker()
    // .setLngLat([120.4455, 15.8066])
    // .addTo(map);
</script>
@stop
