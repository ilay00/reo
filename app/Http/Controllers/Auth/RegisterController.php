<?php

namespace App\Http\Controllers\Auth;
use Mail;
use App\Mail\RegistrationMail;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
use App\Models\Role;
use App\User;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function register(RegisterRequest $request)
    {
        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);
        Mail::to($user->email)->send(new RegistrationMail($user->name));

        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     
   * protected function validator(array $data)
    *{
     *   return Validator::make($data, [
      *      'name' => 'required|max:255',
       *     'email' => 'required|email|max:255|unique:users',
        *    'password' => 'required|min:6|confirmed',
        *]);
    *}
*/
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        try
        {
              
   
        $user=User::create([
            'name' => $data['name'],
         
            'email' => $data['email'],   
            'password' => bcrypt($data['password']),
            

        ]);
        $role=Role::where('slug','author')->first();
        $user->roles()->attach($role);
           return $user;
        }catch (\Exception $e)
        {
            log($e->getMessage());
        }
    }
 

}
