<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Socialite;
use App\Models\User;
   
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
 
   
    public function handleGoogleCallback()
    {
        // try {
        $user = Socialite::driver('google')->user();
  
        $finduser = User::where('google_id', $user->id)->first();
      
        if ($finduser) {
            Auth::login($finduser);
            
            return redirect()->route('home');
        } else {
            $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password'=>$user->id
                ]);
  
            Auth::login($newUser);
   
            return redirect()->route('home');
            //     }
        // } catch (Exception $e) {
        //     return redirect('auth/google/redirect');
        // }
        }
    }
    public function handleGitCallback()
    {
        $user = Socialite::driver('github')->user();
        dd($user);
        $finduser = User::where('git_id', $user->id)->first();
      
        if ($finduser) {
            Auth::login($finduser);
            
            return redirect()->route('home');
        } else {
            $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password'=>$user->id
                ]);
  
            Auth::login($newUser);
   
            return redirect()->route('home');
        }
    }
}
