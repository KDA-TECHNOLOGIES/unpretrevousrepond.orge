<?php

namespace App\Http\Controllers\comptes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompteController extends Controller
{
    //
    public function index(){
        return view('comptes.index');
    }
}
