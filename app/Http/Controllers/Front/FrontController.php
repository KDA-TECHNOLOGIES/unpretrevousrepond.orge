<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
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
        return view('fronts.inscription');
    }
    public function connexion(){
        return view('fronts.login');
    }

}
