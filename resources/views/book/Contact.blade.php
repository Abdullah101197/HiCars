@extends('layout.master')
@section('Appointment')
@section('content')
    @php
        $title = isset($title) ? $title : ''; // If not set, set default value
    @endphp

    <div class="container bg-white">

        <div class="row">
            <div class="col-md-8">
                <h5>Submit
                </h5>



                <form id="contactForm" action="/submit" method="POST">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>














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

                            </h5>
                            <strong>Aberdeen (Tyre Services)</strong>
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
        document.getElementById('btn-morning').addEventListener('click', function() {
            this.classList.add('active');
            document.getElementById('btn-afternoon').classList.remove('active');
        });

        document.getElementById('btn-afternoon').addEventListener('click', function() {
            this.classList.add('active');
            document.getElementById('btn-morning').classList.remove('active');
        });
    </script>

@endsection
