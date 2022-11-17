<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckVersion
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
    $version = $request->get('version');
    if ($version != 2){
        return response()->json(['error' => 'такой версии не существует'], 404);
    }
        return $next($request);
    }
}
