
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
    <!-- <link rel="stylesheet" href="{{asset('Frontend/assets/css/header.css')}}"> -->
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/lite.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('Frontend/assets/css/body.css')}}"> -->
    <!-- <link rel="stylesheet" href="{{asset('Frontend/assets/css/footer.css')}}">   -->



    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>

    <!-- jQuery CDN -->

     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>





  </head>
  <body>


@include('frontend.header')

    <section class="mt-3">
    <div class="container-fluid">
            <div class="row main-search">
            </div>
            <div class="row">
                <!-- Service Items Start -->
                    <div class="col-md-7 center-service-item">
                        @include('frontend.service_item')
                    </div>
                <!-- Service Items End -->

                <div class="col-md-5 col-lg-5 pl-5 login-form">
                 @include('frontend.login_form')
                <!--Login Form End -->
                </div>
                </div>
            </div>
        </div>
    </section>
       <!-- Section Start -->
       <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <!-- slider section -->
                <div class="col-md-8   ">
                          @include('frontend.slider_section')
                </div>
                <!-- slider section -->

                <!-- ad section -->
                <div class="col-md-4 mb-3  advert" style="margin-top: 6.3rem!important;">
                     @include('frontend.advertise')
                </div>
                <!-- ad section -->

            </div>
        </div>
    </section>
    <!-- Section End -->

  @include('frontend.footer')

  </body>
</html>
