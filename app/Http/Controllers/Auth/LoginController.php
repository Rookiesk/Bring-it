<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Passport\ApiTokenCookieFactory;
use Illuminate\Cookie\CookieJar;
use Illuminate\Http\Request;
use Auth;
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

    protected $cookieFactory;
    protected $cookieJar;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ApiTokenCookieFactory $cookieFactory, CookieJar $cookieJar)
    {
        $this->cookieFactory = $cookieFactory;
        $this->cookieJar = $cookieJar;
        $this->middleware('guest')->except('logout');
    }

    public function loginByAPI() {
        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user = Auth::user();
            $success['token'] =  $user->createToken('MyApp')->accessToken;
            $success['status'] = $user['is_banned'];
            return response()->json(['success' => $success], 200);
        }

        return response()->json(['error'=>'Unauthorised'], 401);
    }

    // protected function sendLoginResponse(Request $request)
    // {
    //     $request->session()->regenerate();

    //     $this->clearLoginAttempts($request);

    //     $auth = $this->authenticated($request, $this->guard()->user());

    //     $this->cookieJar->queue(cookie('token', $this->guard()->user()->createToken('MyApp')->accessToken, 45000));

    //     if ($auth) {
    //         return $auth;
    //     }

    //     return redirect()->intended($this->redirectPath());
    // }
}
