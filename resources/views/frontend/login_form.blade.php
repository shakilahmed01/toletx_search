<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{asset('Frontend/assets/css/login_form_style.css')}}">
    <!-- <link rel="stylesheet" href="css/login-form.css" /> -->

</head>

<body>
    <style>
    .login-form {
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }
    </style>
    <!-- <div class="col-md-7 col-lg-5 login-form"> -->
        <div class="wrap login-wrap-body">
            <div class="login-wrap p-4 p-md-5">
                <div class="d-flex">
                    <div class="w-100">
                        <h3 class="mb-4">Log In</h3>
                    </div>
                    <div class="w-100">
                        <p class="social-media d-flex justify-content-end">
                            <a href="#" class="social-icon d-flex align-items-center justify-content-center">
                                <span class="fab fa-facebook-f"></span>
                            </a>
                            <a href="#" class="social-icon d-flex align-items-center justify-content-center">
                                <span class="fab fa-google"></span>
                                <!-- <i class="fab fa-google"></i> -->
                            </a>
                        </p>
                    </div>
                </div>
                <form action="{{ route('newlogin') }}" method="POST" class="signin-form">
                  @csrf
                    <div class="form-group mt-3">
                        <input type="numeric" name="phone" class="form-control" required />
                        <label class="form-control-placeholder" for="username">Mobile number</label>
                    </div>
                    <div class="form-group">
                        <input id="password-field" type="password" name="password" class="form-control" required />
                        <label class="form-control-placeholder" for="password">Password</label>
                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary rounded submit px-3">
                            Sign In
                        </button>
                    </div>
                    <div class="form-group d-md-flex">
                        <div class="w-50 text-left">
                            <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                <input type="checkbox" checked />
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="w-50 text-md-right">
                            <a href="#">Forgot Password</a>
                        </div>
                    </div>
                </form>
                <p class="text-center">
                    Not a member? <a  id="signUp" href="{{route('registration')}}">Sign Up</a>
                </p>
            </div>
        </div>
    <!-- </div> -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    <script>
    (function($) {
        "use strict";

        $(".toggle-password").click(function() {
            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    })(jQuery);
    </script>
</body>

</html>
