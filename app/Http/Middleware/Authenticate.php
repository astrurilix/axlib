<?php

namespace App\Http\Middleware;

use App\Helpers\Response;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Closure;

class Authenticate extends Middleware
{
    public function handle($request, Closure $next, ...$guards)
    {
        $this->authenticate($request, $guards);

        // After the user is authenticated, update the last_online attribute.
        if ($user = Auth::id()) {
            $user = User::find($user);
            $user->update(['last_online' => now()]);
        }

        return $next($request);
    }   
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login');
    }
}
