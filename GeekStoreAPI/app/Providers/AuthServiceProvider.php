<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];
    public function boot()
    {
        $this->registerPolicies();
        Passport::routes();
        //Alcance
        Passport::tokensCan([
            'administrador' => 'Encargado de administrar los CRUD de todos los usuarios, productos y pedidos.',
            'vendedor' => 'Encargado de realizar los pedidos,asignar personal de entrega y facturar pedidos.',
            'cliente' => 'Consume los servicios de la applicación',
        ]);
        Passport::setDefaultScope([
            'administrador'
        ]);
    }
}
