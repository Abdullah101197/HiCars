@extends('layout.master')
@section('Appointment')
@section('content')
    @php
        $title = isset($title) ? $title : ''; // If not set, set default value
    @endphp

    <div class="container bg-white">

        <div class="row">
            <div class="col-md-8">
                <h5>Choose two preferred appointments
                </h5>
                <p>Please choose two and we’ll fix the date when we call to confirm the booking.

                </p>


                <div class="card rounded-pill">
                    <div class="card-body d-flex justify-content-between ">



                        <span>
                            <i class="fa fa-calendar" id="calendar-icon" style="font-size:30px;color:rgb(105, 119, 106)"></i>
                            <label for="dateone">
                                <input type="text" style="font-size: 27px;" id="datepicker" style="display:none;">
                            </label>


                        </span>
                        <span>
                            <div class="btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-primary active" id="btn-morning">
                                    <input type="radio" name="time-1" value="AM" class="sr-only" checked> Morning
                                </label>
                                <label class="btn" id="btn-afternoon">
                                    <input type="radio" name="time-1" value="PM" class="sr-only"> Afternoon
                                </label>
                            </div>


                        </span>
                    </div>
                </div>


               

                










            </div>
            <div class="col-md-4  bg-light summary">

                <div class=" bg-light  border border-5">

                    <div class="card bg-light mt-2">
                        <button class="btn btn-primary w-100 border-0">Next Step</button>


                    </div>

                    <div class="card bg-light mt-3 p-1 border">
                        <h5>Services & MOTs</h5>
                        <div class="card-body justify-content-between" style="text-align: left">

                            <span>Mot Class 7 :</span>

                            <span>Price on request</span>


                        </div>


                    </div>



                    <div class="card bg-light mt-2 p-3">
                        <div class="card-body" style="text-align: left">
                            <h5>
                                <span class="brand">auto tyires company</span>
                                <br>
                                <strong>Aberdeen (Tyre Services)</strong>
                            </h5>
                            <p class="address">
                                Unit 7-9 Hareness Road, Aberdeen, AB12 3LE, United Kingdom

                            </p>
                            <ul class="opening-times list-unstyled justify-space-between">
                                <li>Mon - Fri: <span>07:30 to 17:30</span></li>
                                <li>Sat: <span>07:30 to 12:30</span></li>
                            </ul>
                        </div>


                    </div>

                    <div class="card bg-light mt-2 p-3">

                        <ul class="list-group list-group-flush bg-light">
                            <li class="list-group-item d-flex justify-content-between bg-light">
                                <span><strong>Vehicle brand</strong></span>
                                <span><strong>Model</strong></span>


                            </li>
                            <li class="list-group-item d-flex justify-content-between bg-light">
                                <span>cdfecar</span>
                                <span>56564</span>

                            </li>
                            <li class="list-group-item d-flex justify-content-between bg-light">

                                <span><strong>Year of registration</strong></span>
                                <span><strong>Transmission</strong></span>


                            </li>
                            <li class="list-group-item d-flex justify-content-between bg-light">

                                <span>2017</span>
                                <span>MANUAL</span>


                            </li>

                            <li class="list-group-item d-flex justify-content-between bg-light">


                                <span><strong>MOT due date</strong></span>
                                <span><strong>Fuel type</strong></span>

                            </li>
                            <li class="list-group-item d-flex justify-content-between bg-light">


                                <span>01/06/2024</span>
                                <span>PETROL</span>

                            </li>

                        </ul>
                    </div>


                </div>

            </div>
        </div>




    </div>

    <div class="progress-actions btns float-end">
        <form action="{{ route('Contact') }}" method="post">

            @csrf
            <button class="btn btn-primary" id="next-btn">Next step</button>


        </form>
    </div>




@endsection
@section('scripts')


    <script>
        $(document).ready(function() {

            var availableDates = ["2023-11-10", "2023-11-15", "2023-11-20", "2023-11-25"];


            $('#datepicker').datepicker({
                beforeShowDay: function(date) {
                    var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
                    return [availableDates.indexOf(string) !== -1];
                }
            });


            $('#calendar-icon').on('click', function() {
                $('#datepicker').datepicker('show');
            });




            $('#btn-morning').on('click', function() {

                $(this).addClass('btn-primary');
                $('#btn-afternoon').removeClass('btn-primary');

            });
            $('#btn-afternoon').on('click', function() {

                $(this).addClass('btn-primary');
                $('#btn-morning').removeClass('btn-primary');

            });

        });
    </script>

@endsection
