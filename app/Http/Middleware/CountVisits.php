<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visitor;

class CountVisits
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
        $ip = $request->ip();
        $existingVisitor = Visitor::where('ip_address', $ip)->first(); 
        if ($existingVisitor != null) {
            $counter = $existingVisitor->visits_coutner;
            $updated_counter = $counter++;
            $visitor = Visitor::firstOrCreate(['ip_address' => $ip]);
            $visitor->visits_coutner = $updated_counter;
            $visitor->update();
        }
        else {
            $visitor = Visitor::firstOrCreate(['ip_address' => $ip]);
            $visitor->visits_coutner = 1;
            $visitor->save();
        }
        return $next($request);
    }
}
