<?php

namespace App\Http\Controllers\comptes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CompteController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Cette fonction affiche la vue de la page d'acceuil
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(){
        return view('comptes.index');
    }

    /**
     * Controller qui affiche les amis d'un membre.
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function freresEnchrist(){
        return view('comptes.freresenchrist');
    }

    /**
     * Ce controller afficher la liste des des goupe d'un memebre
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function groupesDePriere(){
        return view('comptes.groupesdepriere');
    }

    /**
     * Ce controller affiche le profil d'un membre
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function profilMembre(){
        return view('comptes.profilmembre');
    }

    /**
     * Ce controller affiche la page de l'agenda de la semaine.
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function monAgenda(){
        return view('comptes.monagenda');
    }

    /**
     * Ce controller affiche la vie des saints.
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function prieres(){
        return view('comptes.prieres');
    }

    /**
     * Ce controller affiche la vie des saints
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function vieDesSaints(){
        return view('comptes.viedessaints');
    }

    public function agendaSpirituel(){
        return view('comptes.agendaspirituel');
    }
}
