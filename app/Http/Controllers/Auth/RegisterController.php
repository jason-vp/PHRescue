<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Entity;
use App\Person;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

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
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/panel';

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
            'nif' => 'required|max:10',
            'name' => 'required|max:255',
            'user_name' => 'required|max:255|unique:users',
            'email' => 'required|email|max:255|unique:entities',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = new User(array(
            'user_name' => $data['user_name'],
            'password' => bcrypt($data['password']),
        ));

        $person = new Person(array(
            'nif' => $data['nif']
        ));

        $entity = new Entity(array(
            'name' => $data['name'],
            'email' => $data['email']
        ));
        $person->save();
        $person->entity()->save($entity);
        $person->user()->save($user);

        return $user;
    }
}
