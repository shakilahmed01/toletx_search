<?php

namespace App\Http\Controllers\PAPI;

use Illuminate\Http\Request;
use App\Http\Controllers\PAPI\BaseController as BaseController;
use App\Models\User;
use App\Models\Phoneotp;
use Illuminate\Support\Facades\Auth;
use Validator;
use Carbon\Carbon;
class RegisterController extends BaseController
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
          'name' => 'required',
          'phone' => 'required',
          'password' => 'required',
          'password_confirmation' => 'required|same:password',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }


              $auth_image=User::create([
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
                'password'=>bcrypt($request['password']),

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

        $success['token'] =  $auth_image->createToken('MyApp')->accessToken;
        $success['name'] =  $auth_image->name;

        return $this->sendResponse($success, 'User register successfully.');
    }

    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        if(Auth::attempt(['phone' => $request->phone, 'password' => $request->password])){
            $user = Auth::user();
            $success['token'] =  $user->createToken('MyApp')-> accessToken;
            $success['name'] =  $user->name;

            return $this->sendResponse($success, 'User login successfully.');
        }
        else{
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        }

    }

    /**
     * Otp api
     *
     */

    public function sendOtp(Request $request){

        $otp = rand(1000,9999);
        // Log::info("otp = ".$otp);
          $phone = Phoneotp::where(['phone_number' => $request->phone_number])->first();
          if (!empty($phone)) {
            $phone->update([
              'isverified' => 0,
                  'otp' => $otp
            ]);
          }
            else{
              $user = Phoneotp::create([
                'phone_number'=>$request->phone_number,
                'otp' => $otp
                ]);
            }

        $success['token'] =  $phone->createToken('MyApp')-> accessToken;
        $success['phone_number'] =  $phone->phone_number;
        return $this->sendResponse($success, 'Otp send successfully.');
    }

    /**
     * Otp match api
     *
     */

    public function loginWithOtp(Request $request){


        $phoneinfo = Phoneotp::where('phone_number', $request->phone_number)->first();

        $time=Carbon::now()->diffInSeconds($phoneinfo->updated_at);
        if($time >60){
          return redirect()->route('loginotp')->with('Failed','your time is up!! Enter your mobile number again');
        }
        if ($phoneinfo && $phoneinfo->otp == $request->otp) {
          $phoneinfo->update([
            'otp' => '',
            'isverified' => 1
          ]);
          $success['token'] =  $phoneinfo->createToken('MyApp')-> accessToken;
          $success['isverified'] =  $phoneinfo->isverified;
          return $this->sendResponse($success, 'Number is verified.');
      }
      else{
          return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
      }

    }
}
