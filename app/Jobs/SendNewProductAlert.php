<?php

namespace App\Jobs;

use App\Mail\AddNewProductMail;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;

class SendNewProductAlert implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //
        $users = User::all();
        foreach ($users as $user) {
            Mail::to($user->email)->send(new AddNewProductMail);
        }
    }
}
