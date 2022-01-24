
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
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/single_search.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/footer.css')}}"> -->

    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript'
        src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>


        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->


        <title>ToletX-F.A.Q.</title>
  </head>
  <body>

    @include('frontend.header') 

    <!-- FAQ SECTION START -->
    <div class="container container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h2 class="fs-1">Guest F.A.Q</h2>
                <div class="accordion accordion-flush" id="guestaccordion">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#g-faq1" aria-expanded="false" aria-controls="g-faq1">
                            Host Question #1
                        </button>
                      </h2>
                      <div id="g-faq1" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#guestaccordion">
                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, quisquam!</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#g-faq2" aria-expanded="false" aria-controls="g-faq2">
                          Host Question #2
                        </button>
                      </h2>
                      <div id="g-faq2" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#guestaccordion">
                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, odit!</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#g-faq3" aria-expanded="false" aria-controls="g-faq3">
                          Host Question #3
                        </button>
                      </h2>
                      <div id="g-faq3" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#guestaccordion">
                        <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, fugiat?</div>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-md-6">
                <h2 class="fs-1">Host F.A.Q</h2>
                <div class="accordion accordion-flush" id="hostaccordion">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                          Guest Question #1
                        </button>
                      </h2>
                      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#hostaccordion">
                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, quisquam!</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                          Guest Question #2
                        </button>
                      </h2>
                      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#hostaccordion">
                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, odit!</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                          Guest Question #3
                        </button>
                      </h2>
                      <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#hostaccordion">
                        <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, fugiat?</div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>

    <!-- FAQ SECTION END -->

    @include('frontend.footer')  
    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  </body>
</html>
