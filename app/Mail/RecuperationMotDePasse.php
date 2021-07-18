<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RecuperationMotDePasse extends Mailable
{
    use Queueable, SerializesModels;
    private $user;
    private $url;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user,$url)
    {
        $this->user = $user;
        $this->url = $url;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Réinitialisation de mot de passe')->view('emails.auth.resetPassword')->with([
            'user'=>$this->user,
            'url'=>$this->url
        ]);
    }
}
