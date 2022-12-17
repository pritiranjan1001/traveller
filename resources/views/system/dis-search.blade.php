@extends('layouts.travel')
 
@section('head')   
<style type="text/css">
    input[value]{
        color: red;
        font-size: 12px;
    }
</style>  
@endsection

@section('content')
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
    <script type="text/javascript">
        var source, destination;
        var directionsDisplay;
        var directionsService = new google.maps.DirectionsService();
        google.maps.event.addDomListener(window, 'load', function () {
            new google.maps.places.SearchBox(document.getElementById('txtSource'));
            new google.maps.places.SearchBox(document.getElementById('txtDestination'));
            directionsDisplay = new google.maps.DirectionsRenderer({ 'draggable': true });
        });

        function GetRoute() {
            var book = new google.maps.LatLng(18.9750, 72.8258);
            var mapOptions = {
                zoom: 7,
                center: book
            };
            map = new google.maps.Map(document.getElementById('disMap'), mapOptions);
            directionsDisplay.setMap(map);
            directionsDisplay.setPanel(document.getElementById('disdire'));

            //*********DIRECTIONS AND ROUTE**********************//
            source = document.getElementById("txtSource").value;
            destination = document.getElementById("txtDestination").value;

            var request = {
                origin: source,
                destination: destination,
                travelMode: google.maps.TravelMode.DRIVING
            };
            directionsService.route(request, function (response, status) {
                if (status == google.maps.DirectionsStatus.OK) {
                    directionsDisplay.setDirections(response);
                }
            });

            //*********DISTANCE AND DURATION**********************//
            var service = new google.maps.DistanceMatrixService();
            service.getDistanceMatrix({
                origins: [source],
                destinations: [destination],
                travelMode: google.maps.TravelMode.DRIVING,
                unitSystem: google.maps.UnitSystem.METRIC,
                avoidHighways: false,
                avoidTolls: false
            }, function (response, status) {
                if (status == google.maps.DistanceMatrixStatus.OK && response.rows[0].elements[0].status != "ZERO_RESULTS") {
                    var distance = response.rows[0].elements[0].distance.text;
                    var duration = response.rows[0].elements[0].duration.text;
                    var dvDistance = document.getElementById("dvDistance");
                    dvDistance.innerHTML = "";
                    dvDistance.innerHTML += "Distance: " + distance + "<br/>";
                    dvDistance.innerHTML += "Duration: " + duration;

                } else {
                    alert("Unable to find the distance via road.");
                }
            });
        }
    </script> 
<div class="container-fluid margin-top-box w3-padding-32" >

        <div class="col-lg-6 top-box text-center">
            <form class="container w3-card w3-white">
            <h4 class="w3-center">Search Distance Between</h4>
                <div class="row">      
                    <label><h6>Starting address</h6></label>
                    <input class="w3-input w3-border" type="text" id="txtSource" value="Gangtok, Sikkim, India">
                </div>
                <div class="row"> 
                    <label><h6>Destination address</h6></label>     
                   <input class="w3-input w3-border" type="text" id="txtDestination" value="North Sikkim, Sikkim, India">
                </div><br>
                <div class="row">      
                <button class="btn btn-primary btn-block" type="button" onclick="GetRoute()" >Get Route
                </button>
                </div>
            </form>
            <div class="container w3-card w3-white">
                <h6>Map view</h6>
                
                <table class="w3-table w3-bordered">
                <tr>
                <h4><div class="w3-text-red" id="dvDistance"></div>
                </h4>
                </tr>
                </table>
              

                <div id="disMap" class="" style="width:100%;height:400px;"></div>

            </div>
        </div>

 

        <div class="col-lg-6 top-box text-center">
            <div class="container w3-card w3-white">
                <h6>Route Map</h6>
                <div id="disdire" style="width:100%;min-height:400px;"></div> 
            </div>
        </div>

    </div>



    <footer class="w3-padding-48"></footer>


@endsection

@section('bottom')

@endsection
