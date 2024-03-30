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



}

    }

  public function login(Request $request,){
  
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
    }else{
        $user = Auth::user();
        $tokenResult = $user->createToken('Login Token');
        $token = $tokenResult->token;
        return view('auth.profile');

    }

}


public function logout(User $user,Request $request){
    $token=$request->user()->token;
    // $token->revoke();
    // return redirect('logout');
}

}