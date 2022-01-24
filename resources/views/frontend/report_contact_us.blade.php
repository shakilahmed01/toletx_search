
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

    <script type='text/javascript'
        src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>


        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->


        <title>ToletX-F.A.Q.</title>
  </head>
  <body>

    @include('frontend.header')

    <!-- Section Start -->
    <section class="pt-5 pb-5">
        <div class="container">
              <div class="row">
                <div class="col-8">
                  <h2>Customer Form</h2>
                <form  class="report-form-main">
                    <div class="input-group mb-3">
                      <span class="input-group-text report-form" id="basic-addon1">
                        <i class="fas fa-user"></i>
                      </span>
                      <input type="text" class="form-control" placeholder="Enter Name" aria-label="name" aria-describedby="basic-addon1" required>
                    </div>

                    <div class="input-group mb-3">
                      <span class="input-group-text report-form" id="basic-addon1">
                        <i class="fas fa-at"></i>
                      </span>
                      <input type="email" class="form-control" placeholder="Enter Email" aria-label="email" aria-describedby="basic-addon1" required>
                    </div>


                      <div class="input-group mb-3">
                        <span class="input-group-text report-form" for="inputGroupSelect01">
                        <i class="fas fa-hand-pointer"></i>
                        </span>
                        <select class="form-select" id="inputGroupSelect01">
                          <option selected>Choose Subject</option>
                          <option value="inquiry">Inquiry</option>
                          <option value="claim">Claim</option>
                          <option value="complain">Complain</option>
                          <option value="others">Others</option>
                        </select>
                      </div>

                    <div class="input-group mb-3">

                      <input type="text" class="form-control" placeholder="If other please specify" aria-label="name" aria-describedby="basic-addon1" >
                    </div>
                    <div class="input-group mb-3">
                      <textarea class="form-control" placeholder="Your Message" id="exampleFormControlTextarea1" rows="5"></textarea>
                    </div>
                    <div class="input-group mb-3">

                     <button type="submit" class="btn  w-100 btn-primary">Submit</button>
                    </div>

                  </form>

                 </div>
                 <style>

      </style>
                    <div class="col-md-4 mb-3"   >

                        @include('frontend.advertise')
                    </div>

            </div>
        </div>
    </section>
    <!-- Section End -->

  @include('frontend.footer')

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>
