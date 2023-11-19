@extends('layout.master')
@section('location')
@section('content')
    @php
        $title = isset($title) ? $title : '';
    @endphp

    <form action="{{ route('Appointment') }}" method="post">

        @csrf


        <div class="container-fluid bg-white mt-5 ">

            <div class="row">
                <div class="col-md-8">
                    <h1 class="display-5"><strong>Choose your services</strong>
                    </h1>
                    <p style="">We offer a wide range of services. Choose a category below to find out more about each,
                        how
                        to book, and
                        promotional offers.</p>
                    <div class="row serivces">
                        <div class="col-md-6">

                            <ul class="list-unstyled">
                                <a class="service-name" href="#scrollTargetother">
                                    <li class="p-1 m-2">
                                        <div class="card">
                                            <div class="card-body d-flex justify-content-around ">
                                                <span><i class="fa fa-info-circle "></i>

                                                </span>
                                                <span>serive name </span>
                                            </div>
                                        </div>

                                    </li>
                                </a>
                                <a class="service-name" href="#scrollTargetother">
                                    <li class="p-1 m-2">
                                        <div class="card">
                                            <div class="card-body d-flex justify-content-around ">
                                                <span><i class="fa fa-info-circle "></i>

                                                </span>
                                                <span>serive name </span>
                                            </div>
                                        </div>

                                    </li>
                                </a>
                                <a class="service-name" href="#scrollTargetother">
                                    <li class="p-1 m-2">
                                        <div class="card">
                                            <div class="card-body d-flex justify-content-around ">
                                                <span><i class="fa fa-info-circle "></i>

                                                </span>
                                                <span>serive name </span>
                                            </div>
                                        </div>

                                    </li>
                                </a>
                                <a class="service-name" href="#scrollTargetother">
                                    <li class="p-1 m-2">
                                        <div class="card">
                                            <div class="card-body d-flex justify-content-around ">
                                                <span><i class="fa fa-info-circle "></i>

                                                </span>
                                                <span>serive name </span>
                                            </div>
                                        </div>

                                    </li>
                                </a>
                                <a class="service-name" href="#scrollTargetother">
                                    <li class="p-1 m-2">
                                        <div class="card">
                                            <div class="card-body d-flex justify-content-around ">
                                                <span><i class="fa fa-info-circle "></i>

                                                </span>
                                                <span>serive name </span>
                                            </div>
                                        </div>

                                    </li>
                                </a>
                                <a class="service-name" href="#scrollTargetinformation">
                                    <li class="p-1 m-2">
                                        <div class="card">
                                            <div class="card-body d-flex justify-content-around ">
                                                <span><i class="fa far fa-file-alt"></i>

                                                </span>
                                                <span>
                                                    Additional Information
                                                </span>
                                            </div>
                                        </div>

                                    </li>
                                </a>

                            </ul>
                        </div>
                        <div class="col-md-6 ">
                            <ul class="list-unstyled">
                                <a class="service-name" href="#scrollTargetother">
                                    <li class="p-1 m-2">
                                        <div class="card">
                                            <div class="card-body d-flex justify-content-around ">
                                                <span><i class="fa fa-info-circle "></i>

                                                </span>
                                                <span>serive name </span>
                                            </div>
                                        </div>

                                    </li>
                                </a>
                                <a class="service-name" href="#scrollTargetother">
                                    <li class="p-1 m-2">
                                        <div class="card">
                                            <div class="card-body d-flex justify-content-around ">
                                                <span><i class="fa fa-info-circle "></i>

                                                </span>
                                                <span>serive name </span>
                                            </div>
                                        </div>

                                    </li>
                                </a>
                                <a class="service-name" href="#scrollTargetother">
                                    <li class="p-1 m-2">
                                        <div class="card">
                                            <div class="card-body d-flex justify-content-around ">
                                                <span><i class="fa fa-info-circle "></i>

                                                </span>
                                                <span>serive name </span>
                                            </div>
                                        </div>

                                    </li>
                                </a>
                                <a class="service-name" href="#scrollTargetother">
                                    <li class="p-1 m-2">
                                        <div class="card">
                                            <div class="card-body d-flex justify-content-around ">
                                                <span><i class="fa fa-info-circle "></i>

                                                </span>
                                                <span>serive name </span>
                                            </div>
                                        </div>

                                    </li>
                                </a>
                                <a class="service-name" href="#scrollTargetother">
                                    <li class="p-1 m-2">
                                        <div class="card">
                                            <div class="card-body d-flex justify-content-around ">
                                                <span><i class="fa fa-info-circle "></i>

                                                </span>
                                                <span>serive name </span>
                                            </div>
                                        </div>

                                    </li>
                                </a>
                            </ul>
                        </div>
                    </div>


                    <div class="container m-3" id="scrollTargetMot">
                        <div class="row p-5">
                            <h5>MOT serivce</h5>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus ullam soluta dolorum quae
                                asperiores! Corporis.</p>
                            <div class="card mt-3 p-3 bg-light">
                                <div class="card-body  ">
                                    <div class="d-flex justify-content-between">
                                        <span>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input radioselection"
                                                    style="height: 40px; width:40px;" type="radio" name="radio"
                                                    id="radio">
                                                <label class="form-check-label p-3" for="radio">MOT Class 4</label>
                                            </div>
                                        </span>

                                        <span>Price on request</span>
                                    </div>
                                    <p class="pt-3">Required by law if your vehicle is 3 years or older. Class 4 MOT is
                                        your
                                        standard MOT test for most passenger cars</p>

                                </div>

                            </div>
                            <div class="card mt-3 p-3 bg-light">
                                <div class="card-body  ">
                                    <div class="d-flex justify-content-between">
                                        <span>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input radioselection"
                                                    style="height: 40px; width:40px;" type="radio" name="radio"
                                                    id="radio">
                                                <label class="form-check-label p-3" for="radio">MOT Class 7</label>
                                            </div>
                                        </span>

                                        <span>Price on request</span>
                                    </div>
                                    <p class="pt-3">Required by law if your vehicle is 3 years or older. Class 4 MOT is
                                        your
                                        standard MOT test for most passenger cars</p>

                                </div>

                            </div>
                            <div class="card mt-3 p-3 bg-light">
                                <div class="card-body  ">
                                    <div class="d-flex justify-content-between">
                                        <span>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input radioselection"
                                                    style="height: 40px; width:40px;" type="radio" name="radio"
                                                    id="radio">
                                                <label class="form-check-label p-3" for="radio">NOT MOT Class</label>
                                            </div>
                                        </span>

                                        <span>Price on request</span>
                                    </div>


                                </div>

                            </div>


                        </div>

                    </div>
                    <div class="container m-3" id="scrollTargetother">
                        <div class="row p-5">
                            <h5>MOT serivce</h5>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus ullam soluta dolorum quae
                                asperiores! Corporis.</p>
                            <div class="card mt-3 p-3 bg-light">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <span>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input radioselection"
                                                    style="height: 40px; width:40px;" type="radio" name="radio"
                                                    id="radio">
                                                <label class="form-check-label p-3" for="radio">MOT Class 4</label>
                                            </div>
                                        </span>

                                        <span>Price on request</span>
                                    </div>
                                    <p class="pt-3">Required by law if your vehicle is 3 years or older. Class 4 MOT is
                                        your
                                        standard MOT test for most passenger cars</p>

                                </div>

                            </div>
                            <div class="card mt-3 p-3 bg-light">
                                <div class="card-body  ">
                                    <div class="d-flex justify-content-between">
                                        <span>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input radioselection"
                                                    style="height: 40px; width:40px;" type="radio" name="radio"
                                                    id="radio">
                                                <label class="form-check-label p-3" for="radio">MOT Class 7</label>
                                            </div>
                                        </span>

                                        <span>Price on request</span>
                                    </div>
                                    <p class="pt-3">Required by law if your vehicle is 3 years or older. Class 4 MOT is
                                        your
                                        standard MOT test for most passenger cars</p>

                                </div>

                            </div>
                            <div class="card mt-3 p-3 bg-light">
                                <div class="card-body  ">
                                    <div class="d-flex justify-content-between">
                                        <span>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input radioselection"
                                                    style="height: 40px; width:40px;" type="radio" name="radio"
                                                    id="radio">
                                                <label class="form-check-label p-3" for="radio">NOT MOT Class</label>
                                            </div>
                                        </span>

                                        <span>Price on request</span>
                                    </div>


                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="container m-3" id="scrollTargetinformation">
                        <div class="row">
                            <h1 class="display-6"> Additional Information
                            </h1>


                            <div class="px-5">
                                <textarea name="AdditionalInformation" id="AdditionalInformation" cols="70" rows="7"></textarea>

                            </div>



                        </div>

                    </div>






                </div>
                <div class="col-md-4  summary">

                    <div class="" style="background: #ebe8e4">

                        <div class="card bg-light ">
                            <button class="btn btn-primary rounded-pill next-btn  border-0 m-3 p-3" disabled>Next
                                Step</button>

                        </div>

                        <div class="card bg-light p-4 border">
                            <h5>Services & MOTs
                            </h5>
                            <div class="card-body" id="Services-report" style="text-align: left">
                            </div>


                        </div>
                        <div class="card bg-light p-4 border">
                            <h5>Additional services
                            </h5>
                            <div class="card-body" id="Additional-report" style="text-align: left">
                            </div>


                        </div>


                        <div class="card bg-light  p-3">
                            <div class="card-body" style="text-align: left">
                                <h5>
                                    <span>
                                        {{ $servicesData['companyDetails'] }}
                                    </span>


                                </h5>
                                <p class="address">
                                    {{ $servicesData['address'] }}

                                </p>
                                <ul class="opening-times list-unstyled justify-space-between">
                                    <li>Mon - Fri: <span>07:30 to 17:30</span></li>
                                    <li>Sat: <span>07:30 to 12:30</span></li>
                                </ul>
                            </div>


                        </div>

                        <div class="card bg-light p-3">

                            <ul class="list-group list-group-flush bg-light">
                                <li class="list-group-item d-flex justify-content-between bg-light">
                                    <span><strong>Vehicle brand</strong></span>
                                    <span><strong>Model</strong></span>


                                </li>
                                <li class="list-group-item d-flex justify-content-between bg-light">
                                    <span> {{ $servicesData['car_detail']['car'] }}</span>
                                    <span>{{ $servicesData['car_detail']['car_model'] }}</span>

                                </li>
                                <li class="list-group-item d-flex justify-content-between bg-light">

                                    <span><strong>Year of registration</strong></span>
                                    <span><strong>Transmission</strong></span>


                                </li>
                                <li class="list-group-item d-flex justify-content-between bg-light">

                                    <span>{{ $servicesData['car_detail']['car_model_year'] }}</span>
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



            <div class="container m-5 bg-light" id="faq">

                <div class="container mt-4">

                    <p class="p-3">
                    <h3> What's included with our services?</h3>
                    <p class="p-1">
                        Take a look below for more details on what's included in each of our car care services.
                    </p>
                    <p class="p-1">
                        *Certain vehicles use specialist oils, if the manufacturer advises your car needs a premium oil we
                        will
                        advise before commencing any work if any additional costs are involved
                    </p>
                    <p class="p-1">
                        **In rare cases certain car makes carry premium priced fuel filters. If this is applicable to your
                        vehicle then we will always advise before commencing the work if there would be an additional cost
                        for
                        your vehicle
                    </p>
                    <p class="p-1">
                        ***Applies to standard spark plugs. If your vehicle carries long life spark plugs or similar we will
                        advise if there are any additional costs before commencing any work
                    </p>
                    <p class="p-3">
                        ****Some HiQ Centres complete visual checks on the brake drums, shoes, pads and discs and do not
                        remove
                        the wheels, please check before booking.
                    </p>
                    </p>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="bg-light"></th>
                                <th class="bg-light">oil&service</th>
                                <th class="bg-light">Interim service</th>
                                <th class="bg-light">Full Service</th>
                                <th class="bg-light">Major Serice</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="5">
                                    <div class="card">
                                        <a class="text-reset text-decoration-none faq-question" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <div class="card-header h-100%" style="background: #ccecf9" id="headingOne">

                                                Oil
                                            </div>
                                        </a>


                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                            data-parent="#faq-list">
                                            <div class="card-body">
                                                <div class="row p-5">
                                                    <div class="col-md-4">Renew engine oil*
                                                    </div>
                                                    <div class="col-md-2">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="col-md-2"> <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="col-md-2"> <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="col-md-2"> <i class="fa fa-check"></i>
                                                    </div>
                                                </div>
                                                <div class="row p-5">
                                                    <div class="col-md-4">Replace oil filter

                                                    </div>
                                                    <div class="col-md-2">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="col-md-2"> <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="col-md-2"> <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="col-md-2"> <i class="fa fa-check"></i>
                                                    </div>
                                                </div>
                                                <div class="row p-5">
                                                    <div class="col-md-4">Run engine and check for leaks

                                                    </div>
                                                    <div class="col-md-2">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="col-md-2"> <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="col-md-2"> <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="col-md-2"> <i class="fa fa-check"></i>
                                                    </div>
                                                </div>
                                                <div class="row p-5">
                                                    <div class="col-md-4">Refit sump plug and replace washer if required
                                                    </div>
                                                    <div class="col-md-2">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="col-md-2"> <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="col-md-2"> <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="col-md-2"> <i class="fa fa-check"></i>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </td>

                            </tr>

                            <tr>
                                <td colspan="5">
                                    <div class="card">
                                        <a class="text-reset text-decoration-none faq-question" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                            <div class="card-header" id="headingTwo">

                                                On Level Checks
                                            </div>
                                        </a>


                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                            data-parent="#faq-list">
                                            <div class="card-body">
                                                <div class="row p-5">
                                                    <div class="col-md-4">Renew engine oil*
                                                    </div>
                                                    <div class="col-md-2">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="col-md-2"> <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="col-md-2"> <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="col-md-2"> <i class="fa fa-check"></i>
                                                    </div>
                                                </div>
                                                <div class="row p-5">
                                                    <div class="col-md-4">Replace oil filter

                                                    </div>
                                                    <div class="col-md-2">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="col-md-2"> <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="col-md-2"> <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="col-md-2"> <i class="fa fa-check"></i>
                                                    </div>
                                                </div>
                                                <div class="row p-5">
                                                    <div class="col-md-4">Run engine and check for leaks

                                                    </div>
                                                    <div class="col-md-2">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="col-md-2"> <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="col-md-2"> <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="col-md-2"> <i class="fa fa-check"></i>
                                                    </div>
                                                </div>
                                                <div class="row p-5">
                                                    <div class="col-md-4">Refit sump plug and replace washer if required
                                                    </div>
                                                    <div class="col-md-2">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="col-md-2"> <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="col-md-2"> <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="col-md-2"> <i class="fa fa-check"></i>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </td>

                            </tr>

                            <tr>
                                <td colspan="5">
                                    <div class="card">
                                        <a class="text-reset text-decoration-none faq-question" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="true"
                                            aria-controls="collapseThree">
                                            <div class="card-header" id="headingThree">

                                                undet the bount
                                            </div>
                                        </a>


                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                            data-parent="#faq-list">
                                            <div class="card-body">
                                                <div class="row p-5">
                                                    <div class="col-md-4">Renew engine oil*
                                                    </div>
                                                    <div class="col-md-2">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="col-md-2"> <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="col-md-2"> <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="col-md-2"> <i class="fa fa-check"></i>
                                                    </div>
                                                </div>
                                                <div class="row p-5">
                                                    <div class="col-md-4">Replace oil filter

                                                    </div>
                                                    <div class="col-md-2">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="col-md-2"> <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="col-md-2"> <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="col-md-2"> <i class="fa fa-check"></i>
                                                    </div>
                                                </div>
                                                <div class="row p-5">
                                                    <div class="col-md-4">Run engine and check for leaks

                                                    </div>
                                                    <div class="col-md-2">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="col-md-2"> <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="col-md-2"> <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="col-md-2"> <i class="fa fa-check"></i>
                                                    </div>
                                                </div>
                                                <div class="row p-5">
                                                    <div class="col-md-4">Refit sump plug and replace washer if required
                                                    </div>
                                                    <div class="col-md-2">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="col-md-2"> <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="col-md-2"> <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="col-md-2"> <i class="fa fa-check"></i>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </td>

                            </tr>

                        </tbody>
                    </table>


                </div>

            </div>
        </div>



        <div class="row action-bar">

            <div class="col-8">
                <div class="actions group-form p-5">
                    <input type="radio" name="action-radio" id="action-radio-button" checked> <span>Select one or more
                        services</span>
                    <p class="dispaly-6" id="other-detail"></p>
                    <input type="hidden" value="{{ json_encode($servicesData) }}" name="servicesData">
                    <input type="hidden" name="Services" id="Services" value="">
                </div>

            </div>
            <div class="col-4">
                <div class="progress-actions btns float-end p-4">

                    <button class="btn btn-primary rounded-pill next-btn" id="next-btn" disabled>Next step</button>

                </div>
            </div>
        </div>



    </form>





@endsection


@section('scripts')
    <script>
        $(document).ready(function() {
            $('.radioselection').on('click', function() {

                if ($(this).is(':checked')) {
                    var labelText = $(this).next('label').text();
                    console.log('Label text: ' + labelText);

                }
                $('#other-detail').append(labelText);
                $('#Services-report').append('<div class="d-flex justify-content-between"><span>' +
                    labelText +
                    '</span><span> Price on request</span></div>');
               var servicestext = $('#Services-report').text().trim();
               $('#Services').val(servicestext);

                var AdditionalInformation = $('#AdditionalInformation').val();

                $('#Additional-report').append(AdditionalInformation);

                $('#address').val(labelText);
                $('#action-radio-button').prop('checked', true);

                if ($('#action-radio-button').is(':checked')) {

                    $('.next-btn').prop('disabled', false);

                } else {
                    $('.next-btn').prop('disabled', true);

                }



            });


            function scrollToTarget(targetId) {
                $(`a[href="#${targetId}"]`).on('click', function(event) {
                    event.preventDefault();
                    const targetParagraph = $(`#${targetId}`);
                    $('html, body').animate({
                        scrollTop: targetParagraph.offset().top
                    }, 'slow');
                });
            }

            scrollToTarget('scrollTargetMot');
            scrollToTarget('scrollTargetother');
        });

        $('.faq-question').on('click', function() {
            const target = $(this).data('target');
            const collapseElement = $(target);

            if (collapseElement.hasClass('show')) {
                collapseElement.removeClass('show');
            } else {
                collapseElement.addClass('show');
            }
        });
    </script>


@endsection
