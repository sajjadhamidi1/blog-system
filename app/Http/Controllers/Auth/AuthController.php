<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

use Carbon\Carbon;
class AuthController extends Controller{

    public function ShowRegesisterForm(){
        return view('auth.register');
    }


    public function ShowLoginForm(){
        return view('auth.login');
    }



    public function register(Request $request){
           
        $validate = Validator::make($request->all(), [
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:8'],
        ]
    );

  // If validator has ben faild
    if ($validate->fails()) {
    
        return response()->json([
        'message' => $validate->errors()->first()
    ], 400);
    // If validator is ok
} else {

    $user = new User([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),

    ]);

    $user->save();
    return response()->json([
        'message' => 'user has ben register successful!'
    ], 201);

    return redirect()->route('home');



}

    }

  public function login(Request $request){
  
    $validate=Validator::make($request->all(),[

        'email' => ['email', 'required'],
        'password' => ['required']
    ]);

    if($validate->fails()){
        return response()->json([
            'message' => $validate->errors()->first()]);
    }

    $cerdinentals = request(['email', 'password']);

    //اگر کاربر وجود نداشت
    if (!Auth::attempt($cerdinentals)) {
        return response()->json([
            'message' => 'unauthorized'
        ], 401);
    }
        $user = Auth::user();

        $tokenResult = $user->createToken('Login Token');
        $token = $tokenResult->token;


        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString(),

        ], 200);




        



   




}

//نمایش پروفایل
public function profile()
{
    $user = Auth::user();

    return response()->json([
        'user' => $user
    ], 200);
  }
   
}