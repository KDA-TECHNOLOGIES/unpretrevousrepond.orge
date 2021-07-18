<?php

namespace App\Listeners;

use App\Mail\AddressMailVerified;
use Illuminate\Auth\Events\Verified;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class AfterVerified
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
     * @param  Verified  $event
     * @return void
     */
    public function handle(Verified $event)
    {
        Session::flash('mverified',"Féllicitation! Votre compte à été verifé avec succès. Veuillez cliquer sur le menu Mon compte pour continuer.");
        Mail::send(new AddressMailVerified($event->user));
    }
}
