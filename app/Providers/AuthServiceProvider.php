<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Lang;
use Illuminate\Notifications\Messages\MailMessage;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        VerifyEmail::toMailUsing(function ($notifiable, $url) {
            return (new MailMessage)
                ->greeting('Hola!')
                ->subject(Lang::get('Verificación de correo'))
                ->line(Lang::get('Haz click en el botón de abajo para verificar el correo.'))
                ->action(Lang::get('Confirme su correo electrónico'), $url)
                ->line(Lang::get('Si no creastes una cuenta, no hagas nada.'))
                ->salutation('Muchas gracias!');
        });
        //
    }
}
