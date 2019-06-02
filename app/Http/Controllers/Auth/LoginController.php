<?php
namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use Auth;
use App\User;
use Exception;
use Validator;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Support\Facades\Input;



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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $githubUser = Socialite::driver('github')->stateless()->user();

        if ((User::where('email', '=', $githubUser->getEmail()))->count() > 0){
                $userHandle = new User;
                $result =User::whereIn('name', array($githubUser->getNickname()))->get();
                $user = User::find($result[0]['id']);
                Auth::login($user);
                return redirect()->back();
            }else{
                $userHandle = new User;
                $userHandle->githubid=$githubUser->getId();
                $userHandle->name = $githubUser->getNickname();
                $userHandle->email = $githubUser->getEmail();
                $userHandle->githubAvatar = $githubUser->getAvatar();
                $userHandle->created_at = now();
                $userHandle->updated_at = now();
                Auth::login($userHandle,true);
            }
    }






    //redirect user based on user role
    public function redirectTo(){
      // User role
      $role = Auth::user()->role;

      // Check user role
      switch ($role) {
          case 'admin':
                  return '/home';
              break;
          case 'Employee':
                  return '/projects';
              break;
          default:
                  return '/';
              break;
      }
  }





}
