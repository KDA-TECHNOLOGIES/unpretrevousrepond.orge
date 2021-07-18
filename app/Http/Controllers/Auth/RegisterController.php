<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Parametres;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
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
            'conditions'=>['required'],
            'religion_id'=>['required'],
            'pays_id'=>['required']
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
        //Création de la personne
        $param = Parametres::where('description','api')->first();
        $url = $param->base_url."personnes";
        try {
            $httpClient = Http::withToken(Session::get('sysToken'))
                ->post($url,[
                    'nomPers'=>$data['name'],
                    'prenomPers'=>$data['lastName'],
                    'religion_id'=>$data['religion_id'],
                    'pay_id'=>$data['pays_id']
                ])->object();
            return User::create([
                'name' => $data['lastName'].' '.$data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'personne_id'=>$httpClient->id
            ]);
        }
        catch (\Exception $exception){
            dd($httpClient);
            abort(500);
        }
    }
}
