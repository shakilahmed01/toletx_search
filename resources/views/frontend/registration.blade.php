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
   <link rel="stylesheet" href="{{asset('Frontend/assets/css/lite.css')}}">

   <!-- <link rel="stylesheet" href="{{asset('Frontend/assets/css/top-searchbar.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/header.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/body.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/stepper-form.css')}}">  -->



   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


   <title>Toletx-Registration</title>
 </head>
 <style>
   .terms #terms {
     padding: 0px 8px 4px 8px;
     border: none;
     border-bottom: 1px solid #ccc;
     border-radius: 0px;
     margin-bottom: 25px;
     margin-top: 2px;
     width: 10%;
     box-sizing: border-box;
     font-family: montserrat;
     color: #2C3E50;
     font-size: 16px;
     letter-spacing: 1px;
   }
 </style>

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

   <!-- Section Start -->
   <section class="pt-5 pb-5">
     <div class="container">
       <div class="row">
         <div class="container-fluid" id=" ">
           <div class="row justify-content-center mt-0">
             <div class="registration-form-card-body col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
               <div class="registration-form-card card px-0 pt-4 pb-0 mt-3 mb-3">
                 <h2><strong>Sign Up Your User Account</strong></h2>
                 <p>Fill all form field to go to next step</p>
                 <div class="row">
                   <div class="col-md-12 mx-0">
                     <form method="POST" action="{{ route('newregister') }}" id="msform" enctype="multipart/form-data">
                       @csrf
                       <!-- progressbar -->
                       <ul class=" " id="progressbar">
                         <li class="active" id="account">
                           <strong>Account</strong>
                         </li>
                         <li id="personal"><strong>Personal</strong></li>
                         <li id="confirm"><strong>Finish</strong></li>
                       </ul>
                       <!-- fieldsets -->
                       <fieldset>
                         <div class="form-card">
                           <div class="col-md-12">
                             <label for="userName" class="form-label">User Name</label>
                             <input type="text" class="form-control msform" name="name" id="userName">
                           </div>
                           <div class="col-md-12">
                             <label for="phone" class="form-label">Phone No.</label>
                             <input type="tel" class="form-control msform" name="phone" id="phone">
                           </div>
                           <div class="col-md-12">
                             <label for="email" class="form-label">Email</label>
                             <input type="email" class="form-control msform" name="email" id="email">
                           </div>
                           <div class="col-md-12">
                             <div class="input-group mb-3">
                              <div class="custom-file">
                                <label class="custom-file-label" for="profilePicture">Add Profile Picture</label>
                                  <br>
                                <input type="file" name="photo" class="custom-file-input" id="inputGroupFile03">
                              </div>
                            </div>
                           </div>

                           <div class="col-md-12">
                             <label for="password" class="form-label">Password</label>
                             <input type="password" name="password" class="form-control msform" id="password">
                           </div>
                           <div class="col-md-12">
                             <label for="confirmPassword" class="form-label">Confirm Password</label>
                             <input type="password" name="password_confirmation"  class="form-control msform msform" id="confirmPassword">
                           </div>




                         </div>
                         <input type="button" name="next" class="next action-button" value="Next Step" />
                       </fieldset>
                       <fieldset>
                         <div class="form-card">
                           <h2 class="fs-title">Personal Information</h2>

                           <div class="col-12">
                             <label for="fName" class="form-label">Father's Name</label>
                             <input type="text" class="form-control msform" name="father_name" id="fName" placeholder="">
                           </div>
                           <div class="col-12">
                             <label for="mName" class="form-label">Mother's Name</label>
                             <input type="text" class="form-control msform" name="mother_name" id="mName" placeholder="">
                           </div>
                           <div class="col-12">
                             <label for="mName" class="form-label">Date of Birth</label>
                           <input class="msform" type="date" name="date_of_birth" placeholder=" " />
                           </div>
                           <div class="col-12">
                             <label for="address" class="form-label">Address</label>
                           <input class="msform" id="address" type="text" name="address"/>
                           </div>
                           <div class="col-md-12">
                             <label for="nationality" class="form-label">Nationality</label>
                             <input type="text" class="form-control msform" name="nationality" id="nationality">
                           </div>
                           <div class="col-md-12">
                             <label for="inputState" class="form-label">Gender</label>
                             <select id="inputState" class="form-select msform" name="gender">
                               <option selected>Gender</option>
                               <option value="Male" >Male</option>
                               <option value="Female" >Female</option>
                             </select>
                           </div>



                           <div class="col-12  mt-3 mb-3">
                              <div class="custom-file" data-toggle="tooltip" data-placement="top" title="Upload Scanned Copy of your Birth Certificate/NID/Driving License/Passport">
                                <label class="custom-file-label" for="inputGroupFile03">Add Photo ID</label>
                                <input type="file" name="n_photo" class="custom-file-input" id="inputGroupFile03">
                              </div>
                           </div>
                           <div class="col-12 pl-3">
                             <div class="form-check">
                               <input class="form-check-input  ml-1 mr-1" type="checkbox" id="gridCheck">
                               <label class="form-check-label" for="gridCheck">
                                 Agree to our <a href="#">terms & conditions</a>
                               </label>
                             </div>
                           </div>
                         </div>
                         <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                         <input type="submit" name="next" class="next action-button" value="Next Step" />
                       </fieldset>

                       <fieldset>
                         <div class="form-card">
                           <h2 class="fs-title text-center">Success !</h2>
                           <br /><br />
                           <div class="row justify-content-center">
                             <div class="col-3">
                               <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image" />
                             </div>
                           </div>
                           <br /><br />
                           <div class="row justify-content-center">
                             <div class="col-7 text-center">
                               <h5>You Have Successfully Signed Up</h5>
                             </div>
                           </div>
                         </div>
                       </fieldset>
                     </form>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>
   <!-- Section End -->

   @include('frontend.footer')

   <!-- Option 2: Separate Popper and Bootstrap JS -->


   <script src="{{asset('Frontend/assets/js/stepper-form.js')}}"></script>

   <script>
     $(function() {
       $('[data-toggle="tooltip"]').tooltip()
     })
   </script>

 </body>

 </html>
