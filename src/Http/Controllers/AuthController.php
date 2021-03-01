<?php


namespace thirdly\acl\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use thirdly\acl\Helper\Error;
use thirdly\acl\Helper\Mail;
use thirdly\acl\Http\Requests\ForgetPassword;
use thirdly\acl\Http\Requests\Login;
use thirdly\acl\Http\Requests\Register;
use \thirdly\acl\Models\User;
use Illuminate\Routing\Controller;

class AuthController extends Controller
{
    public function register(Register $request)
    {
        $user = User::create([
            'first_name' => $request['first_name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'password' => bcrypt($request['password'])
        ]);
        auth()->login($user);
//        return get_class(auth()->user());
        $token = auth()->user()->createToken('acl token')->accessToken;
        return response()->json(['Api_token' => $token, 'user' => auth()->user()], 200);

    }

    public function login(Login $request)
    {
        if (!auth()->attempt($request->only('email', 'password'), $request->remember_me))
            return Error::error('The given data was invalid.', 422, [
                'email' => ['The email or password you have entered are incorrect.']
            ]);
        $token = auth()->user()->createToken('acl token')->accessToken;
        return response()->json(['Api_token' => $token, 'user' => auth()->user()], 200);

    }

    public function logOut()
    {
        if (Auth::check()) {
            auth()->user()->tokens()->delete();
        }
        return response()->json(null, 204);

    }

    public function forgetPasswordSendPassword(ForgetPassword $request)//send new password to email
    {
        $user = User::whereEmail($request->email)->firstOrFail();
        $password = User::generatePassword();
        $user->update(['password' => bcrypt($password)]);
        Mail::send('emails.forgetPassword', $user->email, 'Forgot password', ['password' => $password, 'user' => $user]);
        return response()->json(null, 204);

    }


}