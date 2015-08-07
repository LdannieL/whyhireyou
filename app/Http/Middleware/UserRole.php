<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Routing\Middleware;
use \Auth, \Redirect;

class UserRole {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
	  	if ( Auth::user()->role !== 'User') {
	     // do something
	    return Redirect::to('/')->withMessage('You must me a registrated user to access this page.');
   		}
		return $next($request);
	}

}