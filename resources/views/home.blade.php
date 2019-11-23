@extends('adminlte::page')

@section('title', 'Vaccine Home')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <section class="col-lg-7">
            <div class="card bg-white">
                Another Content
            </div>
        </section>
        <section class="col-lg-5">
            <div class="card bg-white">
                <div class="card-header border-0"><i class="fas fa-map-marker-alt mr-1"></i>Bayambang Map</div>
                <div class="card-body">
                    <div id="map" style="height: 250px; width: 100%; position: relative; overflow: hidden; background-color: transparent;"></div>
                </div>
            </div>
        </section>
    </div>
@stop

@section('css')

<script src='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.css' rel='stylesheet' />
<style>
.mapboxgl-ctrl-bottom-left {
    display: none;
}
/**
* Create a position for the map
* on the page */
#map {
    width: 100%;
    height: 500px;
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
    // .setLngLat([120.455945, 15.82445])
    // .addTo(map); 
</script>
@stop
