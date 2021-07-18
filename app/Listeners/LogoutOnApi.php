<?php

namespace App\Listeners;

use App\Models\User;
use Illuminate\Auth\Events\Logout;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class LogoutOnApi
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
     * @param  Logout  $event
     * @return void
     */
    public function handle(Logout $event)
    {
        DB::select("
            DELETE
            FROM personal_access_tokens
            WHERE tokenable_id = ?
        ",[$event->user->id]);
        $user = User::find($event->user->id);
        $user->update(['api_token'=>null]);
        Session::forget('sysToken');
    }
}
