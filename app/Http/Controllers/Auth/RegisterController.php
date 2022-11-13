<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Person;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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

        $dataForm = $data;

        DB::beginTransaction();

        $user =  User::create([
                'name' => $dataForm['name'],
                'email' => $dataForm['email'],
                'password' => Hash::make($dataForm['password']),
        ]);

        $address = new Address();
        $address->id_user = $user->id;
        $address->address = $dataForm['address'];
        $address->district = $dataForm['district'];
        $address->state = $dataForm['state'];
        $address->city = $dataForm['city'];
        $address->country = $dataForm['country'];
        $address->number = $dataForm['number'];

        $person = new Person();
        $person->id_user = $user->id;

        if($address->save() && $person->save()){
            DB::commit();
        }else{
            DB::rollBack();
        }

        return $user;

    }
}
