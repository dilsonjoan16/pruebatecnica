<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

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

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'user' => ['required', 'string', 'max:20', 'unique:users'],
            'pass' => ['required', 'string', 'max:20'],
            // 'state' => [ 'string', 'max:2'],
            // 'profile' => [ 'integer', 'max:2']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'user' => $data['user'],
            'pass' => Hash::make($data['pass']),
            // 'state' => $data['state'],
            // 'profile' => $data['profile']
        ]);
    }

    public function register(Request $request)
    {   
        $pw = $request->get('password');
        $user = new User;
        $user->user = $request->get('user');
        $user->password = Hash::make($pw);
        $user->state = "IN";
        $user->profile = "2";
        $user->save();

        return view("home");
    }
}
