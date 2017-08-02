<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class LogAfterRequest {

    public function handle($request, Closure $next)
    {
        $_request = json_encode($request->getContent());
        $_request = stripcslashes($_request);
        Log::info($_request);
        return $next($request);
    }

}
