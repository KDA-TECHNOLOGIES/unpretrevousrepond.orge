<?php

namespace App\Listeners;

use App\Models\Parametres;
use App\Models\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class LoginOnApi
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
        $param = Parametres::where('description','api')->first();
        $base_url = $param->base_url;
        $url = $base_url.'login';
        $loged = Http::post($url,['email'=>$event->user->email])->object();
        if($loged){
            $user = User::find($loged->user->id);
            $user->update(['api_token'=>$loged->token]);
            Session::put('sysToken',$loged->token);
        }
        else{
            abort(500);
        }
    }
}
