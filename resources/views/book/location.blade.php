@extends('layout.master')
@section('location')
@section('content')
    @php
        $title = isset($title) ? $title : ''; // If not set, set default value
    @endphp

    <h1 class="dispaly-4 p-5">
        Select a HiQ centre

    </h1>
    <form action="{{ route('services') }}" method="post">

        @csrf
        <div class="row container-location">


            <div id="map" style="height: 500px;"></div>
            <p>Distance: <span id="distance">-</span></p>
            <div class="col-md-12 p-5">

                <div class="above">
                    <div class="row border border-3 bg-light rounded-pill gx-0" style="width: 70%">
                        <div class="form-group col-9 p-2">
                            <div class="input-group rounded-pill">
                                <span class="input-group-text border-0 " id="locationIcon"
                                    style="color: #b4b4c2; fon-size:10px;">
                                    <i class="fas fa-map-marker-alt"></i>
                                </span>
                                <input type="text" class="form-control border-0" id="TPostcode" name="TPostcode"
                                    value="" placeholder="Location" aria-describedby="locationIcon">
                            </div>
                        </div>
                        <div class="form-button col-3 p-1">
                            <button class="btn btn-primary rounded-pill" onclick="search()">Search</button>
                        </div>
                    </div>

                    <div class="row p-3 gx-0">

                        <div class="card col-8">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <img src="https://media.istockphoto.com/id/1152779124/photo/repair-service-station-with-lifted-modern-cars-being-under-maintenance-and-technicians-on.jpg?s=1024x1024&w=is&k=20&c=21lf9nrGQCjJosMf02iE6gg7wdl_KkW7siTa619rY4k="
                                            style="height: 100%; width:100%" alt="img">
                                    </div>
                                    <div class="col-8" style="text-align: left">
                                        <h5 class="company">
                                            <span class="brand">auto tyires company</span>
                                            <br>
                                            <strong>Aberdeen (Tyre Services)</strong>
                                        </h5>
                                        <p class="address" data-lat-long="57.115835101267,-2.0855515428221">
                                            Unit 7-9 Hareness Road, Aberdeen, AB12 3LE, United Kingdom
                                            (<a href="https://www.google.com/maps/dir/?api=1&amp;destination=Unit 7-9 Hareness Road, Aberdeen, AB12 3LE, United Kingdom&amp;travelmode=driving"
                                                target="_blank" rel="noopener noreferrer nofollow">get directions</a>)
                                        </p>
                                        <a href="tel:01224871518" class="tel">01224 871518</a>
                                        <ul class="opening-times list-unstyled justify-space-between">
                                            <li>Mon - Fri: <span>07:30 to 17:30</span></li>
                                            <li>Sat: <span>07:30 to 12:30</span></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="row p-3">
                                    <div class="col-2 p-2">
                                        <img src="https://media.istockphoto.com/id/153857752/photo/a-mechanic-in-a-large-repair-shop.jpg?s=1024x1024&w=is&k=20&c=vkKbC2SrG5mh8YSS2PStam6Y16O2bGfSga_oh-pxLoQ="
                                            style="height:100%; width:100%;" alt="">
                                    </div>
                                    <div class="col-2 p-1">
                                        <h6>name</h6>
                                    </div>
                                    <div class="col-8">
                                        <button type="button" id="select-center"
                                            class="btn btn-primary w-100 rounded-pill">Select</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="row action-bar">

            <div class="col-8">
                <div class="actions group-form p-5">
                    <input type="hidden" name="centerData" value="{{ json_encode($location) }}" id="centerData">

                    <input type="hidden" name="address" id="address" value="">
                    <input type="hidden" name="companyDetails" id="companyDetails" value="">

                    <input type="radio" name="action-radio" id="action-radio-button"> <span>Select a HiQ Centre</span>
                    <p class="dispaly-6" id="other-detail">
                    </p>
                </div>

            </div>
            <div class="col-4">
                <div class="progress-actions btns float-end p-4">

                    <button class="btn btn-primary rounded-pill" id="next-btn" disabled>Next step</button>

                </div>
            </div>
        </div>
    </form>




@endsection


@section('scripts')





    <script>
        $(document).ready(function() {
            $('#select-center').on('click', function() {
                var fullAddress = $('.address').text()
                    .trim();
                var address = fullAddress.split('(')[0]
                    .trim();

                var companyDetails = $('.company').text().trim();
                $('#other-detail').append(address);

                $('#address').val(address);
                $('#companyDetails').val(companyDetails);

                $('#action-radio-button').prop('checked', true);

                if ($('#action-radio-button').is(':checked')) {

                    $('#next-btn').prop('disabled', false).trigger('click');


                } else {
                    $('#next-btn').prop('disabled', true);

                }



            });
        });

        var map;
        var userLocation;
        var storeLocation = {
            lat: 57.115835101267,
            lng: -2.0855515428221
        }; // Replace with your store's location

        document.addEventListener('DOMContentLoaded', function() {
            if (document.querySelectorAll('#map').length > 0) {
                var lang = document.querySelector('html').lang || 'en';

                var js_file = document.createElement('script');
                js_file.type = 'text/javascript';
                js_file.src = 'https://maps.googleapis.com/maps/api/js?callback=initMap&signed_in=true&language=' +
                    lang;
                document.getElementsByTagName('head')[0].appendChild(js_file);
            }
        });

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: storeLocation,
                zoom: 8
            });

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    userLocation = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    var userMarker = new google.maps.Marker({
                        position: userLocation,
                        map: map,
                        title: 'Your Location'
                    });

                    var storeMarker = new google.maps.Marker({
                        position: storeLocation,
                        map: map,
                        title: 'Store Location'
                    });

                    var distance = google.maps.geometry.spherical.computeDistanceBetween(
                        new google.maps.LatLng(userLocation.lat, userLocation.lng),
                        new google.maps.LatLng(storeLocation.lat, storeLocation.lng)
                    );

                    document.getElementById('distance').innerText = (distance / 1000).toFixed(2) + ' km';
                });
            } else {
                alert('Geolocation is not supported by this browser.');
            }
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap&libraries=geometry" async defer>
    @endsection
