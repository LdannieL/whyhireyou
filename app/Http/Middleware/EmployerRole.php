<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Routing\Middleware;
use \Auth, \Redirect;

class EmployerRole {
//Adding custom middleware for member roles
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if ( ! Auth::user()) {
	     // do something
	    return Redirect::to('/')->withMessage('You must login to access this page.');
   		}
		
	  	if ( Auth::user()->role !== 'Employer') {
	     // do something
	    return Redirect::to('/')->withMessage('You must me an employer to access this page.'); 
    	}
		return $next($request);
	}

}