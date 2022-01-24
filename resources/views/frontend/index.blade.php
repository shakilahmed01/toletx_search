
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
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/top-searchbar.css')}}"   >
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


    <!doctype html>
    <html lang="en">
      <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <!-- <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>  -->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- Font Awesome CSS -->
        <!-- <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'> -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!--Custom CSS for header  -->
        <link rel="stylesheet" href="{{asset('Frontend/assets/css/icon.css')}}">
        <link rel="stylesheet" href="{{asset('Frontend/assets/css/lite.css')}}">
        <link rel="stylesheet" href="{{asset('Frontend/assets/css/dark.css')}}">
        <link rel="stylesheet" href="{{asset('Frontend/assets/css/responsive.css')}}">

        <!-- <link rel="stylesheet" href="{{asset('Frontend/assets/css/top-searchbar.css')}}">
        <link rel="stylesheet" href="{{asset('Frontend/assets/css/header.css')}}">
        <link rel="stylesheet" href="{{asset('Frontend/assets/css/body.css')}}">
        <link rel="stylesheet" href="{{asset('Frontend/assets/css/footer.css')}}">
        <link rel="stylesheet" href="{{asset('Frontend/assets/css/responsive.css')}}">  -->

        <!-- dark mode -->
        <script>
      // Render blocking JS:
            if (localStorage.theme) document.documentElement.setAttribute("data-theme", localStorage.theme);
      </script>
        <!-- dark mode -->
      </head>
      <body class="body">
            <!-- offcanvas -->
            <div class="offcanvas offcanvas-start" tab-index="-1" id="sidebar" aria-labelledby="sidebar-label">
                 <div class="offcanvas-header">
                     <h5 class="offcanvas-title" id="sidebar-label">My Other Things</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="close"></button>
                 </div>
                 <div class="offcanvas-body">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                     <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora laudantium ratione commodi quas voluptates enim asperiores. Unde soluta minima eligendi.
                     </p>
                     <a href="#">Go there</a>

                     <!-- <div class="form-check form-switch">
                        <input type="checkbox" class="form-check-input" id="darkSwitch">
                        <label class="custom-control-label" for="darkSwitch">Dark Mode</label>
                    </div> -->

                     <div class="form-check form-switch">
                        <label class="form-check-label lite-mode" id="mode_indicator" for="darkSwitch">Dark Mode</label>
                        <input class="form-check-input ml-3 mode-switch" onclick="myFunction()" type="checkbox" id="darkSwitch">
                    </div>

                 </div>
            </div>
        <!-- offcanvas -->
             <div class="container-fluid">
              <div class="row  " style=" ">
              <div class="col-md-1">
                    <a href="#sidebar" class="d-block mt-4 mb-4 align-center" data-bs-toggle="offcanvas" role="button" aria-controlls="sidebar">
                    <span class="icon-menu mt-4 mb-3"></span>
                    </a>
                </div>

                <div class=" col-md-3 mt-2  mb-2  ">
                    <div class="div ml-4">
                    <a class="navbar-brand" href="{{route('index')}}">
                    <img src="{{asset('Frontend/assets/img/header/toletx_logo.png')}}" alt="..."   class="w-75 logo">
                    </a>
                    </div>
                </div>
                <div class="col-5 col-md-5">
                    <div class="div justify-content-center">
                    <form class = "form-horizontal top-form mt-4  mb-4" role = "form">
                        <div class="row justify-content-center  ">
                            <div class="   top-from ">
                            <form class="w-100 me-3 ">
                                <input type="search" class="form-control" id="location1" placeholder="Search..." aria-label="Search">
                            </form>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>


             </div>
         <hr>


         <script>


        //  toggle dark mode button text
                    function myFunction() {
                        var x = document.getElementById("mode_indicator");
                        if (x.innerHTML === "Dark Mode") {
                            x.innerHTML = "Lite Mode";


                        }
                        else if (x.innerHTML === "Lite Mode") {
                            x.innerHTML = "Dark Mode";
                            }
                    }
        </script>


        <script>
                var darkSwitch = document.getElementById("darkSwitch");
                window.addEventListener("load", function () {
                if (darkSwitch) {
                    initTheme();
                    darkSwitch.addEventListener("change", function () {
                    resetTheme();
                    });
                }
                });

                /**
                 * Summary: function that adds or removes the attribute 'data-theme' depending if
                 * the switch is 'on' or 'off'.
                 *
                 * Description: initTheme is a function that uses localStorage from JavaScript DOM,
                 * to store the value of the HTML switch. If the switch was already switched to
                 * 'on' it will set an HTML attribute to the body named: 'data-theme' to a 'dark'
                 * value. If it is the first time opening the page, or if the switch was off the
                 * 'data-theme' attribute will not be set.
                 * @return {void}
                 */
                function initTheme() {
                var darkThemeSelected =
                    localStorage.getItem("darkSwitch") !== null &&
                    localStorage.getItem("darkSwitch") === "dark";
                darkSwitch.checked = darkThemeSelected;
                darkThemeSelected
                    ? document.body.setAttribute("data-theme", "dark")
                    : document.body.removeAttribute("data-theme");
                }

                /**
                 * Summary: resetTheme checks if the switch is 'on' or 'off' and if it is toggled
                 * on it will set the HTML attribute 'data-theme' to dark so the dark-theme CSS is
                 * applied.
                 * @return {void}
                 */
                function resetTheme() {
                if (darkSwitch.checked) {
                    document.body.setAttribute("data-theme", "dark");
                    localStorage.setItem("darkSwitch", "dark");
                } else {
                    document.body.removeAttribute("data-theme");
                    localStorage.removeItem("darkSwitch");
                }
                }

        </script>
    </head>
    <script>
    const toggleSwitch = document.querySelector('#dark-mode-button input[type="checkbox"]');

    if (localStorage.theme) {
      toggleSwitch.checked = localStorage.theme === "dark";
    }

    function switchTheme(e) {
      const theme = e.target.checked ? "dark" : "light";
      document.documentElement.setAttribute("data-theme", theme);
      localStorage.theme = theme;
    }

    toggleSwitch.addEventListener("change", switchTheme);
    </script>


    <!-- Closing </body> goes here -->
            </body>

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

                <!--Login Form Start -->
                <!-- <div class="col-md-4 login-form mt-2">
                    <div class="row">
                        <div class="dropdown">
                            <form class="px-4 py-3">
                                  <div class="mb-3">
                                    <label for="exampleDropdownFormEmail1" class="form-label">Email/Phone</label>
                                    <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="Enter Email/Phone">
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleDropdownFormPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Enter Password">
                                  </div>
                                  <div class="mb-3">
                                  <a class="dropdown-item" href="#">Forgot Password? </a>
                                  </div>

                                  <button type="submit" class="btn btn-primary">Login</button>
                                </form>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('registration')}}">Don't have any acoount? Register </a>
                          </div>
                    </div>
                </div> -->
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
                <div class="col-8 slider-center slide-show ">
                          @include('frontend.slider_section')
                </div>
                <!-- slider section -->

                <!-- ad section -->
                <div class="col-md-4 mb-3  advert" style="margin-top: 9.3rem!important;">
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
