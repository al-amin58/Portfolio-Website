<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Visitor;
use Illuminate\Support\Facades\Log;

class CountVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $ipAddress = $request->ip();

        // Check if the IP address already exists
        if (!Visitor::where('ip_address', $ipAddress)->exists()) {
            Visitor::create([
                'ip_address' => $ipAddress,
            ]);
        }

        return $next($request);
    }
}
