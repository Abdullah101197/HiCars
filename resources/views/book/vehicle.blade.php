@extends('layout.master')
@section('vechicle')
@section('content')
    @php
        $title = isset($title) ? $title : ''; // If not set, set default value
    @endphp

@section('content')
    @php
        $title = isset($title) ? $title : ''; // If not set, set default value
    @endphp
    <form action="{{ route('location') }}" method="post">
        @csrf


        <div class="container-fluid bg-light mt-4" id="vehicle">
            <h1 class="display-6 p-2">Your Car</h1>
            <p class="display-12 p-2">
                Check these details related to your vehicle. If they’re incorrect, press ‘Not my vehicle’ to re-enter your
                information.
            </p>

            <div class="card car-card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mt-5 text-end">
                            <div class="asset">
                                <img src="https://images.unsplash.com/photo-1532974297617-c0f05fe48bff?auto=format&fit=crop&q=80&w=1528&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    style="max-width:50%; height:auto;" alt="Vehicle image">
                                <p class="text-end p-3">Image for illustrative purposes only</p>
                            </div>
                        </div>
                        <div class="col-md-8 d-flex justify-content-around text-end p-5">
                            <ul class="list-unstyled">
                                <li><strong>Vehicle brand</strong></li>
                                <li>{{ $result['car'] }}</li>
                                <li><strong>Year of registration</strong></li>
                                <li>{{ $result['car_model_year'] }}</li>
                                <li><strong>MOT due date</strong></li>
                                <li>01/06/2024</li>
                            </ul>

                            <ul class="list-unstyled">
                                <li><strong>Model</strong></li>
                                <li>{{ $result['car_model'] }}</li>
                                <li><strong>Transmission</strong></li>
                                <li>MANUAL</li>
                                <li><strong>Fuel type</strong></li>
                                <li>PETROL</li>
                            </ul>
                        </div>
                        <div class="wrong-car">
                            <div class="btns float-end">
                                <a href="{{ url('/') }}" class="btn btn-small btn-grey rounded-pill target-modal">Not
                                    my
                                    vehicle</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card car-card-optional p-1">
                <div class="card-body">
                    <h2 class="display-5">Tell us a little more information (optional)</h2>
                    <div class="row border border-3 rounded-pill gx-0 bg-white" style="width: 90%;">
                        <div class="form-group col-md-6 p-1" style="max-width: 100%">
                            <div class="input-group">
                                <span class="input-group-text border-0 rounded-pill bg-light" id="locationIcon"
                                    style="color: #0d0d0e">
                                    <i class="fas fa-map-marker-alt me-2"></i>
                                </span>
                                <input type="text" class="form-control border-0 rounded-pill" id="Mileage"
                                    name="Mileage" value="" placeholder="Mileage">
                            </div>
                        </div>
                        <div class="form-group col-md-6 p-1">
                            <div class="input-group">
                                <span class="input-group-text border-0 rounded-pill bg-light">
                                    <i class="fa fa-calendar" id="calendar-icon" style="color:#0d0d0e"></i>
                                </span>
                                <input class="form-control border-0 rounded-pill" placeholder="last date of service"
                                    type="text" id="datepicker" name="lastServiceDate">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row action-bar">

            <div class="col-8">
                <div class="actions group-form p-5">
                    <input type="radio" name="action-radio" id="action-radio-button" checked> <span>Enter your vehicle
                        information</span>
                    <p class="dispaly-6" id="other-detail"></p>
                    <input type="hidden" value="{{ json_encode($result) }}" name="car_detail">
                </div>

            </div>
            <div class="col-4">
                <div class="progress-actions btns float-end p-4">

                    <button class="btn btn-primary rounded-pill" id="next-btn">Next step</button>

                </div>
            </div>
        </div>


    </form>

@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#datepicker').datepicker({
                dateFormat: 'yy/mm/dd', // Set the date format
            });

            $('#calendar-icon').on('click', function() {
                $('#datepicker').datepicker('show');
            });


            $('#datepicker').on('change', function() {
                var date = $(this).val();
                var Mileage = $('#Mileage').val(); // Fixed syntax error here

                $('#other-detail').append(Mileage + ' miles, last serviced ' +
                    date); // Concatenating date and Mileage
            });


        });
    </script>
@endsection
