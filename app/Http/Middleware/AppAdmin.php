<?php

namespace App\Http\Middleware;

use Closure;

class AppAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        config(['jwt.user' => '\App\Models\Admin\Users']);    //用于指定特定model
        config(['auth.providers.emerald_user.model' => \App\Models\Admin\Users::class]);
        return $next($request);
    }
}
