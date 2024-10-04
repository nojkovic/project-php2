<?php

namespace App\Observers;

use App\Events\UserRegistered;
use App\Models\log;

class UserRegisteredObserver
{
    /**
     * Handle the log "created" event.
     */
    public function handle(UserRegistered $event)
    {

//        Log::create([
//            'activity' => 'User Registered',
//            'user_id' => $event->userOur->id,
//            'details' => 'New user registered: ' . $event->userOur->email,
//        ]);


        Log::info('User Registered: ' . $event->userOur->email);
    }
    public function created(log $log): void
    {
        //
    }

    /**
     * Handle the log "updated" event.
     */
    public function updated(log $log): void
    {
        //
    }

    /**
     * Handle the log "deleted" event.
     */
    public function deleted(log $log): void
    {
        //
    }

    /**
     * Handle the log "restored" event.
     */
    public function restored(log $log): void
    {
        //
    }

    /**
     * Handle the log "force deleted" event.
     */
    public function forceDeleted(log $log): void
    {
        //
    }
}
