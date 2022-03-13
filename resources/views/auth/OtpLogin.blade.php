@extends('layouts.master')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>
                    @if ($message = Session::get('Failed'))
          												<div class="alert alert-success alert-block">
          														<button type="button" class="close" data-dismiss="alert">×</button>
          																<strong>{{ $message }}</strong>
          												</div>
          												@endif

                    <div class="card-body">
                        <form method="POST" action="{{ route('send.otp') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Mobile No') }}</label>

                                <div class="col-md-6">
                                    <input id="phone" type="number" class="form-control" name="phone" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row send-otp">
                                <div class="col-md-8 offset-md-4">
                                    <button class="btn btn-success"  type="submit">Send OTP</button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>




    <script>
        $('.otp').hide();
        function sendOtp() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

          alert($('#phone').val());
            $.ajax( {
                url:'sendOtp',
                type:'post',
                data: {'phone': $('#phone').val()},
                success:function(data) {
                    // alert(data);
                    if(data != 0){
                        $('.otp').show();
                        $('.send-otp').hide();
                    }else{
                        alert('Mobile No not found');
                    }

                },
                error:function () {
                    console.log('error');
                }
            });
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
@endsection
