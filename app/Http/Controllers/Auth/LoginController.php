<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use User;
use Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Redirect the user to the Facebook authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }


    /**
     * Obtain the user information from Facebook.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $userSocial = Socialite::driver('facebook')->user();
        dd($userSocial);
        $user = new User;

        $findUser = $user->where('email', $userSocial->email)->first();

        if ($findUser) {

            Auth::login($findUser);

        }else {

            $user->name = $userSocial->name;
            $user->job_title = $userSocial->name;
            $user->username = $userSocial->name;
            $user->email = $userSocial->email;
            $user->password = bcrypt('165464');
            $user->save();

            Auth::login($user);
        }
    }
}
