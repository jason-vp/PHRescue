<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Entity;
use App\Person;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Validation\Rule;
use DB;
use Log;

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
        return  Validator::make($data, [
            'nif' => [
                'required',
                'max:10',
                'uniqueIfExternalCondition:people,users,people.id = users.person_id'
            ],
            'name' => 'required|max:255',
            'user_name' => 'required|max:255|unique:users',
            'email' => [
                'required',
                'email',
                'max:255',
                'uniqueIfExternalCondition:entities,users,entities.entitable_type like "%Person%" and entities.entitable_id = users.person_id'
            ],
            'password' => 'required|min:6|confirmed'
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

        $person = Person::where('nif', $data['nif'])->first();

        if (!$person) {
            $person = new Person(array(
                'nif' => $data['nif']
            ));
            $person->save();

            $entity = Entity::where('email', $data['email'])->first();
            if (!$entity) {
                $entity = new Entity(array(
                    'name' => $data['name'],
                    'email' => $data['email']
                ));
            }

            $person->entity()->save($entity);
        }

        $person->user()->save($user);

        return $user;
    }
}
