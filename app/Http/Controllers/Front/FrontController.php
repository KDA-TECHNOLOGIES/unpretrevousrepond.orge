<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Parametres;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class FrontController extends Controller
{

    /**
     * FrontController constructor.
     */
    public function __construct()
    {
        $this->middleware(['sys.auth']);
    }

    public function index(){
        $httpClient = new Client();
        return view('fronts.index');
    }
    public function quisommesNous(){
        return view('fronts.quisommesnous');
    }
    public function contact(){
        return view('fronts.contact');
    }
    public function actualites(){
        return view('fronts.actualites');
    }
    public function faq(){
        return view('fronts.faq');
    }
    public function inscription(){
        if(Auth::check()){
            return redirect()->route('compte.index');
        }
        $param = Parametres::where('description','api')->first();
        $religions = Http::withToken(Session::get('sysToken'))
            ->get($param->base_url.'religions');
        $pays = Http::withToken(Session::get('sysToken'))
            ->get($param->base_url.'pays');

        return view('fronts.inscription',[
            'pays'=>$pays->object(),
            'religions'=>$religions->object()
        ]);
    }
    public function connexion(){
        return view('fronts.login');
    }
    public function conditionsEtTermes(){
        return view('fronts.conditionsetermes');
    }

}
