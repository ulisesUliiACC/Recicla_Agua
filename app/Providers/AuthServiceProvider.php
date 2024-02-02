<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Exceptions\UnauthorizedException;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;


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

      Gate::before(function ($user, $ability) {
          // Verifica si el usuario es el super admin
          $superAdmins = ['UlisesDFUWU', 'malvadisco'];

          if (in_array($user->username, $superAdmins)) {
            return true; // Super admin tiene acceso a todo
        }

          try {
              $user->hasPermissionTo($ability);
          } catch (UnauthorizedException $exception) {
              return response()->view('errors.403', [
                  'exception' => $exception,
                  'requiredRoles' => $exception->getRequiredRoles(),
                  'requiredPermissions' => $exception->getRequiredPermissions(),
              ], 403);
          }
      });

    }
}
