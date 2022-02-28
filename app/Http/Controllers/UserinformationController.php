<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use App\Models\UserInformation;
use App\Models\User;
use App\Models\Phoneotp;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use Validator;
use Image;
class UserinformationController extends Controller
{
    //
    use RegistersUsers;


  /**
   * Where to redirect users after registration.
   *
   * @var string
   */
  protected $redirectTo = RouteServiceProvider::HOME;

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('guest');
  }

  public $successStatus = 200;

  public function login_new(Request $request){
      Log::info($request);
      if(Auth::attempt(['phone' => request('phone'), 'password' => request('password')])){
        // return Redirect::index();
        return Redirect::HOME();
      }
      else{
          return Redirect::back ();
      }
  }

  public function loginWithOtp(Request $request){
      Log::info($request);
      $phoneInfo = Phoneotp::where('phone_number', $request->phone)->first();
      if ($phoneInfo && $phoneInfo->otp == $request->otp) {
        $phoneInfo->update([
          'otp' => '',
          'isverified' => 1
        ]);
        return redirect()->route('registration', ['phone' => $request->phone]);
      }
      return redirect()->back();
      // $user  = User::where([['phone','=',request('phone')],['otp','=',request('otp')]])->first();
      // if( $user){
      //     Auth::login($user, true);
      //     User::where('phone','=',$request->phone)->update(['otp' => null]);
      //     return Redirect::HOME();
      // }
      // else{
      //     return Redirect::back ();
      // }

  }


  public function register(Request $request)
  {

      $validator = Validator::make($request->all(), [
          'name' => 'required',
          'phone' => 'required',
          'photo' => 'required',
          'email' => 'required',
          'password' => 'required',
          'password_confirmation' => 'required|same:password',
      ]);
      if ($validator->fails()) {
          return response()->json(['error'=>$validator->errors()], 401);
      }
      $phone = Phoneotp::where(['phone_number' => $request->phone, 'isverified' => 1 ])->exists();
      if (!$phone) {
        return redirect()->back()->withErrors(['msg' => 'Phone is not verified']);
        //error message
      }

      $auth_image=User::insertGetId([
        'name'=>$request->name,
        'phone'=>$request->phone,
        'photo'=>$request->photo,
        'email'=>$request->email,
        'nationality'=>$request->nationality,
        'father_name'=>$request->father_name,
        'mother_name'=>$request->mother_name,
        'address'=>$request->address,
        'date_of_birth'=>$request->date_of_birth,
        'gender'=>$request->gender,
        'n_photo'=>$request->n_photo,
        'password'=>Hash::make($request['password']),

]);
      if ($request->hasFile('photo')) {
          $photo_upload     =  $request ->photo;
          $photo_extension  =  $photo_upload -> getClientOriginalExtension();
          $photo_name       =  "toletx_user_main". $auth_image . "." . $photo_extension;
          Image::make($photo_upload)->resize(452,510)->save(base_path('public/uploads/auth/'.$photo_name),100);
          User::find($auth_image)->update([
          'photo'          => $photo_name,
              ]);
            }

            if ($request->hasFile('n_photo')) {
                $photo_upload     =  $request ->photo;
                $photo_extension  =  $photo_upload -> getClientOriginalExtension();
                $photo_name       =  "toletx_user_n_photo". $auth_image . "." . $photo_extension;
                Image::make($photo_upload)->resize(452,510)->save(base_path('public/uploads/auth/'.$photo_name),100);
                User::find($auth_image)->update([
                'n_photo'          => $photo_name,
                    ]);
                  }


      return view('frontend.login_form');
  }

  public function sendOtp(Request $request){

      $otp = rand(1000,9999);
      Log::info("otp = ".$otp);
      $user = Phoneotp::create([
        'phone_number'=>$request->phone,
        'otp' => $otp
      ]);
      // send otp to mobile no using sms api
      return redirect()->route('verify.otp', ['phone' => $request->phone]);
      return response()->json([$user],200);
  }

  function indexotp(){
    return view('auth.OtpLogin');
  }
  public function verifyOtp()
  {
    return view('auth.verify-otp');
  }



    function post_user_information(Request $request){

      $user=UserInformation::insertGetId([
        'name'=>$request->name,
        'ncard_number'=>$request->ncard_number,
        'father_name'=>$request->father_name,
        'mother_name'=>$request->mother_name,
        'address'=>$request->address,
        'date_of_birth'=>$request->date_of_birth,
        'p_identity'=>$request->p_identity,
        'gender'=>$request->gender,
        'created_at'   =>Carbon::now()
      ]);
      // if ($request->hasFile('photo')) {
      //     $photo_upload     =  $request ->photo;
      //     $photo_extension  =  $photo_upload -> getClientOriginalExtension();
      //     $photo_name       =  "i_need_user_". $user . "." . $photo_extension;
      //     Image::make($photo_upload)->resize(100,100)->save(base_path('public/uploads/users/'.$photo_name),100);
      //     UserRegistration::find($user)->update([
      //     'photo'          => $photo_name,
      //         ]);
      //       }
      return back()->with('success','User have successfully registered.');
    }
}
