<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrackClicks
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->route() && $request->route()->getName() === 'show') {
            $propertyId = $request->route('property_id');
            $property = \App\Models\RealData::where('property_id', $propertyId)->first();

            if ($property) {
                $clicks = json_decode($request->cookie('property_clicks', '[]'), true);

                $clicks[$propertyId] = [
                    'id' => $propertyId,
                    'description' => $property->description,
                ];

                cookie()->queue('property_clicks', json_encode($clicks), 60 * 24 * 30); // 30 days
            }
        }

        return $next($request);
    }
}
