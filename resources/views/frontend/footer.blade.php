 

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
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/footer.css')}}"> -->

    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript'
        src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>

    <title>Footer</title>
  </head>
<!-- Footer Start -->
<footer class="pl-5"  >
        <div class=" container-fluid pt-5 pl-5">
            <div class="row">
                <div class="col-md-4">
                 <h2 class="quick-links">Contact Us</h2>
                    <ul class="list-unstyled mt-4 contact-us">
                       <li class="mt-2 mb-2">
                           <i class="fas fa-phone"></i>
                         <span>01253156</span>
                       </li>
                       <li class="mt-2 mb-2">
                        <i class="far fa-address-book"></i>
                        <span >(Level-11, Annex-II Building), Motijeel C/A, Dhaka, Bangladesh</span>
                       </li>
                       <li class="mt-2 mb-2">
                        <i class="far fa-envelope"></i>
                        <span>demo@demo.com</span>
                      </li> 
                    </ul>
                </div>
                <div class="col-md-3">
                    <h2 class="quick-links mt-4 mb-4">Quick Links</h2>
                    <ul class="quick-links mt-4">
                        <li class="quick-links-li mt-2 mb-2"> 
                            <a href="{{route('faq')}}">F.A.Q</a>
                        </li>
                        <li class="quick-links-li mt-2 mb-2">
                            <a href="#">Terms & Conditions</a>
                        </li>
                        <li class="quick-links-li mt-2 mb-2">
                            <a href="{{route('report_contact_us')}}">Report / Contact Us</a>
                        </li> 
                    </ul>
                </div>
                <div class="col-md-3">
                    <h2 class="social-icons mt-4 mb-4">Social Links</h2>
                    <div class="social-icons mt-4">
                        <i class="fab fa-facebook-square"></i>
                        <i class="fab fa-twitter-square"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-snapchat-ghost"></i>
                        <i class="fab fa-youtube-square"></i>
                    </div>
                </div>
            </div>
            <!-- Sub-Footer Start -->
            <div class="row sub-footer ">
                <p class="text-center my-auto">
                    © Developed By CODETREE
                </p> 
            </div>
            <!-- Sub-Footer End --> 
        </div>
    </footer>
<!-- Footer End -->
  

  