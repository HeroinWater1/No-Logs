<?php

namespace App\Listener;

use App\Events\SendMessageEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendMessageListener
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
     * @param  \App\Events\SendMessageEvent  $event
     * @return void
     */
    public function handle(SendMessageEvent $event)
    {
        $message = $event->message;

    }
}
