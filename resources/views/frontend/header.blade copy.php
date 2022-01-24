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
         <div class="container-fluid">
              <!-- Top Search Bar Start -->
          <div class="row  " style="background-color:black"> 
            <div class="col-md-2 mt-2  mb-2">
                <div class="div ml-4">
                    <a href="{{route('index')}}">
                            <img src="{{asset('Frontend/assets/img/header/toletX-v1.png')}}" class="logo"  alt="" srcset="">
                    </a>
                </div>
            </div>
            <div class="col-md-7">
                <div class="div justify-content-center">
                <form class = "form-horizontal top-form mt-4  mb-4" role = "form">
                    <div class="row justify-content-center  ">
                        <div class="col-md-2 col-sm-2  top-from">
                        <input type="text" class="form-control" id="location" placeholder="Location" aria-label="First name">
                        </div>
                        <div class="col-md-2 col-sm-2  top-from">
                        <input type="date" class="form-control" id="check-in-date" placeholder="Add Dates" aria-label="Add Dates">
                        </div>
                        <div class="col-md-2  col-sm-2  top-from">
                        <input type="date" class="form-control" id="check-out-date" placeholder="Add Dates" aria-label="Add Dates">
                        </div>
                        <div class="col-md-2  col-sm-2 top-from">
                        <input type="number" class="form-control" id="guest-count" placeholder="Guests" aria-label="Guests">
                        </div>
                        <div class="col-md-4  col-sm-2 top-from top-from-submit">
                            <input type="button"class="form-control btn btn-danger"  id="" value="Search"> 
                        </div>
                    </div>
                </form>
                </div>
            </div>  
        </div>
<!-- Top Search Bar End --> 
    </form> 
         </div>
     
   <!-- Option 2: Separate Popper and Bootstrap JS -->
    
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>