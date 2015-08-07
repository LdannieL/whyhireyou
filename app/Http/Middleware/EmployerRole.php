<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Routing\Middleware;
use \Auth, \Redirect;

class EmployerRole {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
	  	if ( Auth::user()->role !== 'Employer') {
	     // do something
	    return Redirect::to('/')->withMessage('You must me an employer to access this page.'); 
    	}
		return $next($request);
	}

}