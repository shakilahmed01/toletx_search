
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
               <form action="{{route('search')}}" method="get">
                <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search">
              </form>
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

                    <div class="row justify-content-center ">
                        <div class="   top-from ">
                        <form class="form-horizontal top-form mt-4  mb-4 " action="{{route('search')}}" method="GET" >
                          @csrf
                          <input type="search" name="query" class="form-control"  id="location1" placeholder="Search..." aria-label="Search">
                        </form>
                        </div>
                    </div>

                </div>
            </div>
            @if(Auth::user())
            <div class="col-md-1 mt-4  mb-4 ">
             <!-- <a  href="{{route('after_login_home')}}" class="btn btn-danger" >log out</a> -->
             <div class="nav-item dropdown">
               <!-- <img src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}"
                  style="border: 1px solid #cccccc; border-radius: 5px; width: 39px; height: auto;float:left; margin-right: 7px;"> -->
                 <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                     <span class="btn btn-danger">{{ Auth::user()->name }}</span>
                 </a>

                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                     </form>
                 </div>
             </div>
            </div>

            <!-- Notification -->
            <div class="col-md-1 notification-row">
                <div class="dropdown mt-4  mb-4">
                    <button class="btn bell " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="Dropstart">

                <span class="icon-bell-o"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Lorem ipsum dolor sit amet.</a></li>
                        <hr>
                        <li><a class="dropdown-item" href="#">Lorem ipsum dolor sit amet.</a></li>
                        <hr>
                        <li><a class="dropdown-item" href="#">Lorem ipsum dolor sit amet.</a></li>
                        <hr>
                    </ul>
                </div>
            </div>
            <!-- Settings -->
            <div class="col-md-1 ">
                <div class="dropdown mt-4  mb-4">
                    <button class="btn setting" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                     <span class="icon-cog "></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="{{route('profile')}}">Profile</a></li>
                        <li><a class="dropdown-item" href="{{route('profile')}}">Post Ad</a></li>
                        <li><a class="dropdown-item" href="#">Privacy</a></li>
                    </ul>
                </div>
            </div>
            @else

            @endif
        </div>
    </form>
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
