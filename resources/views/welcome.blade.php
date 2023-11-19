<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Car Search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<style>
    .button-fitment {
        height: 60px;
        width: 100px;
        border-radius: 0px 30px 30px 0px;
    }

    /* Add hover effect */
    .border-rounded-pill:hover {
        background-color: #f5f5f5;
        transition: background-color 0.3s;
    }

    .field:before {
        content: '';
        background: #9f9ea0;
        display: block;
        height: 2.5rem;
        width: 1px;
        left: 1px;
        bottom: 0.75rem;
    }

    .field {
        position: relative
    }

    .hidden {
        display: none;
    }
</style>

<body>

    <div class="container mt-5">
        @if (Session::has('error'))
            <div class="alert alert-danger">
                {{ Session::get('error') }}
            </div>
        @endif


        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="tyres-tab" data-bs-toggle="tab" data-bs-target="#tyres"
                    type="button" role="tab" aria-controls="tyres" aria-selected="true">Buy Tyres</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="book-tab" data-bs-toggle="tab" data-bs-target="#book" type="button"
                    role="tab" aria-controls="book" aria-selected="false">Book MOT or Service</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="find-tab" data-bs-toggle="tab" data-bs-target="#find" type="button"
                    role="tab" aria-controls="find" aria-selected="false">Find HiQ Centre</button>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tyres" role="tabpanel" aria-labelledby="tyres-tab">
                <h2 class="m-5">Buy Tyres</h2>
                <form action="{{ route('search') }}" method="post">
                    @csrf
                    <div class="row border border-3 rounded-pill gx-0 hidden" style="width: 70%;" id="div1">
                        <div class="form-group col-md-5 p-1">
                            <div class="input-group">
                                <input type="text" class="form-control border-0 rounded-pill" id="TcarRegistration"
                                    name="TcarRegistration" value="" placeholder="Car Registration" required>
                            </div>
                        </div>
                        <div class="form-group col-md-5 p-1">
                            <div class="input-group">
                                <span class="input-group-text border-0 rounded-pill bg-light" id="locationIcon"
                                    style="color: #b4b4c2">
                                    <i class="fas fa-map-marker-alt me-2"></i> Location
                                </span>
                                <input type="text" class="form-control border-0 rounded-pill" id="TPostcode"
                                    name="TPostcode" value="" placeholder="Postcode or Location"
                                    aria-describedby="locationIcon" required>
                            </div>
                        </div>
                        <div class="form-group col-md-2 p-1">
                            <button class="btn btn-primary w-100 rounded-pill" onclick="search()">Search</button>
                        </div>
                    </div>
                </form>

                

                <div class="container mt-4" id="div2" class="hidden">
                    <form action="{{ route('search') }}" method="post">
                        @csrf
                        <div class="row border border-3 rounded-pill text-center" style="width: 70%;">

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="fitment-width">Width</label>
                                        <select class="form-select border-0" name="width" id="fitment-width" required
                                            aria-label="Tyre width">
                                            <option></option>
                                            <option value="135">135</option>
                                            <option value="140">140</option>
                                            <option value="145">145</option>
                                            <option value="150">150</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3 border-start border-2">
                                        <label for="fitment-profile ">Profile</label>
                                        <select class="form-select border-0" name="profile" id="fitment-profile"
                                            required aria-label="Tyre profile">
                                            <option></option>
                                            <option value="130">130</option>

                                            <option value="155">155</option>
                                            <option value="160">160</option>
                                            <option value="165">165</option>
                                            <option value="170">170</option>
                                            <option value="175">175</option>
                                            <option value="180">180</option>
                                            <option value="185">185</option>
                                            <option value="190">190</option>
                                            <option value="195">195</option>
                                            <option value="200">200</option>
                                            <option value="205">205</option>
                                            <option value="210">210</option>
                                            <option value="215">215</option>
                                            <option value="220">220</option>
                                            <option value="225">225</option>
                                            <option value="230">230</option>
                                            <option value="235">235</option>
                                            <option value="240">240</option>
                                            <option value="245">245</option>
                                            <option value="250">250</option>
                                            <option value="255">255</option>
                                            <option value="260">260</option>
                                            <option value="265">265</option>
                                            <option value="270">270</option>
                                            <option value="275">275</option>
                                            <option value="280">280</option>
                                            <option value="285">285</option>
                                            <option value="290">290</option>
                                            <option value="295">295</option>
                                            <option value="300">300</option>
                                            <option value="305">305</option>
                                            <option value="310">310</option>
                                            <option value="315">315</option>
                                            <option value="320">320</option>
                                            <option value="325">325</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3 border-start border-2 ">
                                        <label for="fitment-rim">RIM</label>
                                        <select class="form-select border-0" name="rim" id="fitment-rim" required
                                            aria-label="Wheel rim size">
                                            <option></option>

                                            <option value="25">25</option>
                                            <option value="30">30</option>
                                            <option value="35">35</option>
                                            <option value="40">40</option>
                                            <option value="45">45</option>
                                            <option value="50">50</option>
                                            <option value="55">55</option>
                                            <option value="60">60</option>
                                            <option value="65">65</option>
                                            <option value="70">70</option>
                                            <option value="75">75</option>
                                            <option value="80">80</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3 border-start border-2">
                                        <label for="fitment-speed " class="">Speed</label>
                                        <select class="form-select border-0" name="speed" id="fitment-speed"
                                            aria-label="Tyre speed index">
                                            <option></option>
                                            <option value="H">H</option>
                                            <option value="N">N</option>
                                            <option value="P">P</option>
                                            <option value="Q">Q</option>
                                            <option value="S">S</option>
                                            <option value="T">T</option>
                                            <option value="V">V</option>
                                            <option value="W">W</option>
                                            <option value="Y">Y</option>
                                            <option value="Z">Z</option>
                                            <option value="ZR">ZR</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row gx-0 gy-0">


                                    <div class="col-md-9 border-start">
                                        <div class="input-group">
                                            <span class="input-group-text" id="locationIcon" style="color: #b4b4c2">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </span>
                                            <input class="form-control " placeholder="Postcode or location"
                                                type="text" name="location" id="fitment-location" value=""
                                                required aria-label="Postcode or location" style="height: 60px;">
                                        </div>

                                    </div>
                                    <div class="col-md-3">
                                        <button type="submit" class="btn btn-primary button-fitment">Search</button>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>

                <div class="form-check form-switch pt-3">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                    <label class="form-check-label" for="flexSwitchCheckChecked">Search By Fitment?</label>
                </div>
            </div>

            <div class="tab-pane fade" id="book" role="tabpanel" aria-labelledby="book-tab">
                <!-- Content for booking MOT or service -->
                <h2 class="m-5">Book MOT or Service</h2>
                <form action="{{ route('search') }}" method="post">
                    <div class="row border border-3 rounded-pill gx-0" style="width: 70%;">


                        @csrf

                        <div class="form-group col-md-5 p-1">
                            <div class="input-group">
                                <input type="text" class="form-control border-0 rounded-pill" id="carRegistration"
                                    name="carRegistration" value="" placeholder="Car Registration" required>
                            </div>
                        </div>
                        <div class="form-group col-md-5 p-1">
                            <div class="input-group">
                                <span class="input-group-text border-0 rounded-pill bg-light" id="locationIcon"
                                    style="color: #0d0d0e">
                                    <i class="fas fa-map-marker-alt me-2"></i> Location
                                </span>
                                <input type="text" class="form-control border-0 rounded-pill" id="Postcode"
                                    name="Postcode" value="" placeholder="Postcode or Location"
                                    aria-describedby="locationIcon" required>
                            </div>
                        </div>
                        <div class="form-group col-md-2 p-1">
                            <button class="btn btn-primary w-100 rounded-pill" onclick="search()">Search</button>
                        </div>

                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="find" role="tabpanel" aria-labelledby="find-tab">
                <!-- Content for finding HiQ Centre -->
                <h2>Find HiQ Centre</h2>
                <p>Content for finding HiQ Centre goes here.</p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        // jQuery document ready function
        $(document).ready(function() {
            // Get references to the switch and div elements
            const switchButton = $('#flexSwitchCheckChecked');
            const div1 = $('#div1');
            const div2 = $('#div2');

            // Add event listener to the switch button
            switchButton.on('change', function() {
                // Toggle the visibility of div1 and div2 based on the switch state
                if (switchButton.prop('checked')) {
                    div1.addClass('hidden');
                    div2.removeClass('hidden');
                } else {
                    div1.removeClass('hidden');
                    div2.addClass('hidden');
                }
            });
        });
    </script>

</body>

</html>
