@extends('layouts.master')
@section('content')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  </head>
  <body>

    </form>
          <!-- Header Start -->
    <header class="mt-4">
        <div class="container-fluid">
            <div class="row main-search">

            </div>
            <div class="row">
                <!-- Service Items Start -->
                    <div class="col-md-7 center-service-item">
                        @include('frontend.service_item')
                    </div>
                <!-- Service Items End -->

                 @include('frontend.profile_info')
                </div>
                <hr>
                    <div class="row ml-4 mr-4 ">
                       <div class="col-md-12">
                       <div class="container container-fluid">
                            <form class = "form-horizontal top-form" role = "form">
                                <div class="row justify-content-center">
                                    <div class="col-md-2 mb-2 ml-2 top-from">
                                    <input type="text" class="form-control" id="location" placeholder="Location" aria-label="First name">
                                    </div>
                                    <div class="col-md-2 mb-2  ml-2 top-from">
                                    <input type="date" class="form-control" id="check-in-date" placeholder="Add Dates" aria-label="Add Dates">
                                    </div>
                                    <div class="col-md-2  mb-2  ml-2 top-from">
                                    <input type="date" class="form-control" id="check-out-date" placeholder="Add Dates" aria-label="Add Dates">
                                    </div>
                                    <div class="col-md-2 mb-2 ml-2 mr-2 top-from">
                                    <input type="number" class="form-control" id="guest-count" placeholder="Guests" aria-label="Guests">
                                    </div>
                                    <div class="col-md-2 mb-2 top-from top-from-submit">
                                        <input type="button"class="form-control btn btn-danger"  id="" value="Search">
                                    </div>
                                </div>
                        <!-- Checkbox filters -->
                      <div class="mt-3">
                        <div class="form-check form-check-inline  ml-3">
                                <input class="form-check-input" type="checkbox" id="wifi" value="wifi">
                                <label class="form-check-label checkboxes-label" for="wifi">Wifi</label>
                            </div>
                            <div class="form-check form-check-inline ml-3">
                                <input class="form-check-input" type="checkbox" id="bathroom" value="bathroom">
                                <label class="form-check-label checkboxes-label" for="bathroom">Bathroom</label>
                            </div>
                            <div class="form-check form-check-inline ml-3">
                                <input class="form-check-input" type="checkbox" id="lift" value="lift"  >
                                <label class="form-check-label checkboxes-label" for="lift">Lift</label>
                            </div>
                            <div class="form-check form-check-inline  ml-3">
                                <input class="form-check-input" type="checkbox" id="furnished" value="furnished">
                                <label class="form-check-label checkboxes-label" for="furnished">Furnished</label>
                            </div>
                      </div>
                      <div class="mt-3">
                        <div class="form-check form-check-inline ml-3">
                                <input class="form-check-input" type="checkbox" id="cctv" value="cctv">
                                <label class="form-check-label checkboxes-label" for="cctv">CCTV</label>
                            </div>
                            <div class="form-check form-check-inline ml-3">
                                <input class="form-check-input" type="checkbox" id="security" value="security">
                                <label class="form-check-label checkboxes-label" for="security">Security</label>
                            </div>
                            <div class="form-check form-check-inline ml-3">
                                <input class="form-check-input" type="checkbox" id="parking" value="parking"  >
                                <label class="form-check-label checkboxes-label" for="parking">Parking</label>
                            </div>
                      </div>
                       </div>
                     <div class="mt-3 ml-3">
                     <span class="checkboxes-label">Price Range</span>

                     <input type="range" value="24" min="0" max="100000" oninput="this.nextElementSibling.value = this.value">
               <output class="checkboxes-label">24</output>
                     </div>

                            </form>
                        </div>
                </div>

                </div>

                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Section Start -->
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-6  ">
                    <a class="btn btn-custom-color1 mb-3 mr-1" href="#carouselExampleIndicators2" role="button"
                        data-slide="prev">
                        <i class="fa fa-arrow-left slide-control"></i>
                    </a>
                    <a class="btn btn-custom-color1 mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                        <i class="fa fa-arrow-right slide-control"></i>
                    </a>
                </div>
                <div class="col-8">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <div class="card  slider-section  ">
                                            <img class="img-fluid slider-img" alt="100%x280"
                                                src="{{asset('Frontend/assets/img/1.The_Pinnacle_(Guangzhou,_China)_indexxrus.jfif')}}">
                                            <div class="card-body">
                                                <p class="card-title">USD: 1200/Night</p>
                                                <p class="card-text">
                                                    The Pinnacle
                                                </p>
                                                <span>
                                                    <i class="fas fa-shower"></i>
                                                    <i class="fas fa-wifi"></i>
                                                    <i class="fas fa-smoking"></i>
                                                </span>
                                                <p class="mt-3">
                                                    <i class="fas fa-border-all"></i>
                                                    <span>3600 sqft</span>
                                                </p>
                                                <button type="button" class="btn btn-custom-color2">
                                                    Check Details
                                                </button>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card   slider-section ">
                                            <img class="img-fluid slider-img" alt="100%x280" src="{{asset('Frontend/assets/img/2.Gevora_Hotel.jpg')}}" >
                                                <div class="card-body">
                                                    <p class="card-title">USD: 1200/Night</p>
                                                    <p class="card-text">
                                                        Gevora Hotel
                                                    </p>
                                                    <span>
                                                        <i class="fas fa-shower"></i>
                                                        <i class="fas fa-wifi"></i>
                                                        <i class="fas fa-smoking"></i>
                                                    </span>
                                                    <p class="mt-3">
                                                        <i class="fas fa-border-all"></i>
                                                        <span>3600 sqft</span>
                                                    </p>
                                                    <button type="button" class="btn btn-custom-color2">
                                                        Check Details
                                                    </button>

                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card  slider-section ">
                                            <img class="img-fluid slider-img" alt="100%x280"
                                                src="{{asset('Frontend/assets/img/3.HK_Bank_of_China_Tower_View.jpg')}}">
                                                <div class="card-body">
                                                    <p class="card-title">USD: 9900/Month</p>
                                                    <p class="card-text">
                                                        Bank of China
                                                    </p>
                                                    <span>
                                                        <i class="fas fa-shower"></i>
                                                        <i class="fas fa-wifi"></i>
                                                        <i class="fas fa-smoking"></i>
                                                    </span>
                                                    <p class="mt-3">
                                                        <i class="fas fa-border-all"></i>
                                                        <span>3600 sqft</span>
                                                    </p>
                                                    <button type="button" class="btn btn-custom-color2">
                                                        Check Details
                                                    </button>

                                                </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <div class="card  slider-section ">
                                            <img class="img-fluid slider-img" alt="100%x280"
                                                src="{{asset('Frontend/assets/img/4.Central-plaza2.jpg')}}">
                                                <div class="card-body">
                                                    <p class="card-title">USD: 1200/Night</p>
                                                    <p class="card-text">
                                                        Central Plaza
                                                    </p>
                                                    <span>
                                                        <i class="fas fa-shower"></i>
                                                        <i class="fas fa-wifi"></i>
                                                        <i class="fas fa-smoking"></i>
                                                    </span>
                                                    <p class="mt-3">
                                                        <i class="fas fa-border-all"></i>
                                                        <span>3600 sqft</span>
                                                    </p>
                                                    <button type="button" class="btn btn-custom-color2">
                                                        Check Details
                                                    </button>

                                                </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card  slider-section ">
                                            <img class="img-fluid slider-img" alt="100%x280"
                                                src="{{asset('Frontend/assets/img/5.Dalian_International_Trade_Center,_Aug2018_(cropped).jpg')}}">
                                                <div class="card-body">
                                                    <p class="card-title">USD: 1200/Night</p>
                                                    <p class="card-text">
                                                        Dalian International
                                                    </p>
                                                    <span>
                                                        <i class="fas fa-shower"></i>
                                                        <i class="fas fa-wifi"></i>
                                                        <i class="fas fa-smoking"></i>
                                                    </span>
                                                    <p class="mt-3">
                                                        <i class="fas fa-border-all"></i>
                                                        <span>3600 sqft</span>
                                                    </p>
                                                    <button type="button" class="btn btn-custom-color2">
                                                        Check Details
                                                    </button>

                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card  slider-section ">
                                            <img class="img-fluid slider-img" alt="100%x280"
                                                src="{{asset('Frontend/assets/img/6.Empire_State_Building_from_the_Top_of_the_Rock.jpg')}}">
                                                <div class="card-body">
                                                    <p class="card-title">USD: 1200/Night</p>
                                                    <p class="card-text">
                                                        Empire State
                                                    </p>
                                                    <span>
                                                        <i class="fas fa-shower"></i>
                                                        <i class="fas fa-wifi"></i>
                                                        <i class="fas fa-smoking"></i>
                                                    </span>
                                                    <p class="mt-3">
                                                        <i class="fas fa-border-all"></i>
                                                        <span>3600 sqft</span>
                                                    </p>
                                                    <button type="button" class="btn btn-custom-color2">
                                                        Check Details
                                                    </button>

                                                </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <div class="card  slider-section ">
                                            <img class="img-fluid slider-img" alt="100%x280"
                                                src="{{asset('Frontend/assets/img/7.Diwang_Dasha_25.JPG')}}">
                                                <div class="card-body">
                                                    <p class="card-title">USD: 1200/Night</p>
                                                    <p class="card-text">
                                                        Diwang Dasha
                                                    </p>
                                                    <span>
                                                        <i class="fas fa-shower"></i>
                                                        <i class="fas fa-wifi"></i>
                                                        <i class="fas fa-smoking"></i>
                                                    </span>
                                                    <p class="mt-3">
                                                        <i class="fas fa-border-all"></i>
                                                        <span>3600 sqft</span>
                                                    </p>
                                                    <button type="button" class="btn btn-custom-color2">
                                                        Check Details
                                                    </button>

                                                </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card  slider-section ">
                                            <img class="img-fluid slider-img" alt="100%x280"
                                                src="{{asset('Frontend/assets/img/8.China_Resources_Headquarters_03-10-2018.jpg')}}">
                                                <div class="card-body">
                                                    <p class="card-title">USD: 1200/Night</p>
                                                    <p class="card-text">
                                                        China Resources
                                                    </p>
                                                    <span>
                                                        <i class="fas fa-shower"></i>
                                                        <i class="fas fa-wifi"></i>
                                                        <i class="fas fa-smoking"></i>
                                                    </span>
                                                    <p class="mt-3">
                                                        <i class="fas fa-border-all"></i>
                                                        <span>3600 sqft</span>
                                                    </p>
                                                    <button type="button" class="btn btn-custom-color2">
                                                        Check Details
                                                    </button>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card  slider-section ">
                                            <img class="img-fluid slider-img" alt="100%x280"
                                                src="{{asset('Frontend/assets/img/9.Al_Hamra_Tower.jpg')}}">
                                                <div class="card-body">
                                                    <p class="card-title">USD: 1200/Night</p>
                                                    <p class="card-text">
                                                        Al Hamra Tower
                                                    </p>
                                                    <span>
                                                        <i class="fas fa-shower"></i>
                                                        <i class="fas fa-wifi"></i>
                                                        <i class="fas fa-smoking"></i>
                                                    </span>
                                                    <p class="mt-3">
                                                        <i class="fas fa-border-all"></i>
                                                        <span>3600 sqft</span>
                                                    </p>
                                                    <button type="button" class="btn btn-custom-color2">
                                                        Check Details
                                                    </button>

                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="col-md-4 mb-3">
                       @include('frontend.advertise')
                    </div>

            </div>
        </div>
    </section>
    <!-- Section End -->



  </body>
  </html>
  @endsection
