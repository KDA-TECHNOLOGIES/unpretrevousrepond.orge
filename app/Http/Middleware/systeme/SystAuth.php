<?php

namespace App\Http\Middleware\systeme;

use App\Models\Parametres;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class SystAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!Session::has('sysToken')){
            $param = Parametres::where('description','api')->first();
            $loged = Http::post($param->base_url.'login',[
                'email'=>env('SYS_EMAIL'),
                'password'=>env('SYS_PWD')
            ])->object();
            if($loged){
                $user = User::find($loged->user->id);
                $user->update(['api_token'=>$loged->token]);
                Session::put('sysToken',$loged->token);
            }
            else{
                abort(500);
            }
        }
        return $next($request);
    }
}
