<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToletX</title>
</head>
<body>

</body>
</html>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

    <!-- Font Awesome CSS -->
    <!-- <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Custom CSS for header  -->
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/top-searchbar.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/header.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/body.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/footer.css')}}">

    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript'
        src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>

    <title>Hello, world!</title>
  </head>
  <body>

        @include('frontend.header')

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

                                    <div class="col-md-4 mb-3 ">
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
                                                <button type="button" class="btn btn-custom-color2 check-detail">
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
                                                <button type="button" class="btn btn-custom-color2 check-detail">
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
                                                    <button type="button" class="btn btn-custom-color2 check-detail">
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
                                                    <button type="button" class="btn btn-custom-color2 check-detail">
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
                                                    <button type="button" class="btn btn-custom-color2 check-detail">
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
                                                    <button type="button" class="btn btn-custom-color2 check-detail">
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
                                                    <button type="button" class="btn btn-custom-color2 check-detail">
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
                                                    <button type="button" class="btn btn-custom-color2 check-detail">
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
                                                    <button type="button" class="btn btn-custom-color2 check-detail">
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
                        <div class="card adversitse">
                            <img class="img-fluid slider-img" alt="100%x280"
                                src="{{asset('Frontend/assets/img/website-ad.png')}}">
                            <div class="card-body">
                                <h4 class="card-title">Special title treatment</h4>
                                <p class="card-text">With supporting text below as a natural lead-in to
                                    additional content.</p>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </section>
    <!-- Section End -->

  @include('footer')

  </body>
</html>
