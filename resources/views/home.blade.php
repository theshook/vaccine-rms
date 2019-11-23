@extends('adminlte::page')

@section('title', 'Vaccine Home')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <section class="col-lg-7">
            <div class="card bg-white">
                <div class="card-header border-0"><i class="fas fa-map-marker-alt mr-1"></i>Bayambang Map</div>
                <div class="card-body">
                    <div id="map" style="height: 400px; width: 100%; position: relative; overflow: hidden; background-color: transparent;"></div>
                </div>
            </div>
        </section>
        <section class="col-lg-5">
            <div class="card bg-white">
                
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

    //     var marker = new mapboxgl.Marker()
    //     .setLngLat([ lng, lat])
    //     .addTo(map); 

    map.on('load', function() {
        map.addSource('my-data', {
            type: 'geojson',
            data: '{!! route('home.geojson') !!}'
        });

        map.addLayer({
        "id": "earthquakes-heat",
        "type": "heatmap",
        "source": "my-data",
        "maxzoom": 9,
        "paint": {
        // Increase the heatmap weight based on frequency and property magnitude
        "heatmap-weight": [
        "interpolate",
        ["linear"],
        ["get", "mag"],
        0, 0,
        6, 1
        ],
        // Increase the heatmap color weight weight by zoom level
        // heatmap-intensity is a multiplier on top of heatmap-weight
        "heatmap-intensity": [
        "interpolate",
        ["linear"],
        ["zoom"],
        0, 1,
        9, 3
        ],
        // Color ramp for heatmap.  Domain is 0 (low) to 1 (high).
        // Begin color ramp at 0-stop with a 0-transparancy color
        // to create a blur-like effect.
        "heatmap-color": [
        "interpolate",
        ["linear"],
        ["heatmap-density"],
        0, "rgba(33,102,172,0)",
        0.2, "rgb(103,169,207)",
        0.4, "rgb(209,229,240)",
        0.6, "rgb(253,219,199)",
        0.8, "rgb(239,138,98)",
        1, "rgb(178,24,43)"
        ],
        // Adjust the heatmap radius by zoom level
        "heatmap-radius": [
        "interpolate",
        ["linear"],
        ["zoom"],
        0, 2,
        9, 20
        ],
        // Transition from heatmap to circle layer by zoom level
        "heatmap-opacity": [
        "interpolate",
        ["linear"],
        ["zoom"],
        7, 1,
        9, 0
        ],
        }
        });
        
        map.addLayer({
        "id": "earthquakes-point",
        "type": "circle",
        "source": "my-data",
        "minzoom": 7,
        "paint": {
        // Size circle radius by earthquake magnitude and zoom level
        "circle-radius": [
        "interpolate",
        ["linear"],
        ["zoom"],
        7, [
        "interpolate",
        ["linear"],
        ["get", "mag"],
        1, 1,
        6, 4
        ],
        16, [
        "interpolate",
        ["linear"],
        ["get", "mag"],
        1, 5,
        6, 50
        ]
        ],
        // Color circle by earthquake magnitude
        "circle-color": [
        "interpolate",
        ["linear"],
        ["get", "mag"],
        1, "rgba(33,102,172,0)",
        2, "rgb(103,169,207)",
        3, "rgb(209,229,240)",
        4, "rgb(253,219,199)",
        5, "rgb(239,138,98)",
        6, "rgb(178,24,43)"
        ],
        "circle-stroke-color": "white",
        "circle-stroke-width": 1,
        // Transition from heatmap to circle layer by zoom level
        "circle-opacity": [
        "interpolate",
        ["linear"],
        ["zoom"],
        7, 0,
        8, 1
        ]
        }
        });
    });
</script>
@stop
