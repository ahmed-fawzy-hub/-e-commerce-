<?php

namespace App\Providers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        // Gate::define('isAdmin', function (User $user) {
        //     return $user->type === 'admin';
        // });

        // Gate::define('edit-product', function (User $user, Product $product) {
        //     return $user->id === $product->created_by;
        // });

        VerifyEmail::toMailUsing(function (object $notifiable, string $url) {
            return (new MailMessage)
                ->subject('Verify your Account')
                // ->greeting('Hello ' . $notifiable->name)
                // ->line('Thank you for signing up for our e-commerce platform')
                // ->action('Activivate Account', $url)
                // ->line('If you did not create an account, no furthur action is required.')
                ->view('emails.custom-verify', [
                    'user' => $notifiable,
                    'url' => $url,
                ]);
        });
    }
}
