<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Job;
use App\Models\Category;
use App\Models\Type;
use Illuminate\Http\Request;

use \Input, \Redirect, \View, \DB;

class JobsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $jobs =  Job::with('user', 'category', 'type')->paginate(5);
        $categories = Category::get();
        $types = Type::get();
        return view('index', compact('jobs', 'categories', 'types'));
	}

	public function show($id)
	{
        $job = Job::with('user', 'category', 'type')->find($id);
        return view('job', compact('job'));
	}

		/**
	 * Submit search keywords here.
	 * POST /search
	 *
	 * @return Response
	 */
	// 
		public function search() {
		// $jobs =  Job::get();
		$keyword = Input::get('keywords');
		if (empty($keyword) ) {
			$keyword = 'keyword';
		}	
		$state = Input::get('states');
		$category = Input::get('categories');	

		// if (!empty($keyword) AND $state!='select state' AND $category!='select category' ) {
		// 	return Redirect::route('searchResult', [$keyword, $state, $category]);
		// } 	

		// if (empty($keyword) AND $state=='select state' AND $category=='select category' ) {
		// 	return Redirect::route('home')
		// 		->withError('Please enter at least one criterium for search, try again');
		// } 

		// if (!empty($keyword) AND $state=='select state' AND $category=='select category' ) {
		// 	return Redirect::route('searchResult', $keyword);
		// } 

		// if (empty($keyword) AND $state!='select state' AND $category=='select category' ) {
		// 	return Redirect::route('searchResult', $state);
		// }

		// if (empty($keyword) AND $state=='select state' AND $category!='select category' ) {
		// 	return Redirect::route('searchResult', $category);
		// } 

		// if (!empty($keyword) AND $state!='select state' AND $category=='select category' ) {
		// 	return Redirect::route('searchResult', [$keyword, $state]);
		// } 

		// if (!empty($keyword) AND $state=='select state' AND $category!='select category' ) {
		// 	return Redirect::route('searchResult', [$keyword, $category]);
		// } 

		// if (!empty($keyword) AND $state!='select state' AND $category!='select category' ) {
			return Redirect::route('searchResult', [$keyword, $state, $category]);
		// } 

		// return Redirect::route('searchResult', [$keyword, $state, $category]);
	}

	// public function searchResult($keyword, $state = 'select state', $category = 'select category') {
	// 	$jobs =  Job::with('user', 'category', 'type')->get();

	// 	$category_id = Category::where('name',"=", $category)->first();
	// 	$category_id = $category_id->id;

	// 	$jobs =  Job::where('description', 'LIKE', '%'.$keyword.'%')->orWhere('title', 'LIKE', '%'.$keyword.'%')->where('state',"=", $state)->where('category_id',"=", $category_id)->paginate(3);

	// 	return View::make('results', compact('jobs'))
	// 		->withTitle('Search Results')
	// 		->withKeyword($keyword)
	// 		->withState($state)
	// 		->withCategory($category);
	// }

//Fully functional, WORKING AS IT SHOULD
	public function searchResult($keyword=null, $state=null, $category=null) {	
// var_dump($keyword);
// var_dump($state);
// var_dump($category);
// die();
	if($keyword!=='keyword' && $state=='select state' && $category=='select category') {
        $jobs = Job::where('title', 'LIKE', '%'. $keyword .'%')
	            ->orWhere('description', 'LIKE', '%'. $keyword .'%')
	            ->paginate(3); 
	}

	if($keyword=='keyword' && $state!=='select state' && $category=='select category') {
        $jobs = Job::where('state',"=", $state)
	            ->paginate(3); 
	}

	if($keyword=='keyword' && $state=='select state' && $category!=='select category') {
    	$category_id = Category::where('name',"=", $category)->first();
		$category_id = $category_id->id;
        $jobs = Job::where('category_id',"=", $category_id)
	            ->paginate(3); 
	}

	if($keyword!=='keyword' && $state!=='select state' && $category=='select category') {

		$jobs = DB::table('jobs')
            ->where('state',"=", $state)
            ->where( function($query) use ($keyword) 
            {
                $query->where('description', 'LIKE', '%'. $keyword .'%')
                      ->orWhere('title', 'LIKE', '%' . $keyword .'%');
            })
            ->paginate(3);

    }

    if($keyword!=='keyword' && $state=='select state' && $category!=='select category') {
    	$category_id = Category::where('name',"=", $category)->first();
		$category_id = $category_id->id;
	    $jobs = DB::table('jobs')
            ->where('category_id',"=", $category_id)
            ->where( function($query) use ($keyword) 
            {
                $query->where('description', 'LIKE', '%'. $keyword .'%')
                      ->orWhere('title', 'LIKE', '%' . $keyword .'%');
            })
            ->paginate(3);
	}

	if($keyword=='keyword' && $state!=='select state' && $category!=='select category') {
    	$category_id = Category::where('name',"=", $category)->first();
		$category_id = $category_id->id;
        $jobs = Job::where('state',"=", $state)
	            ->where('category_id',"=", $category_id)
	            ->paginate(3); 
	}

	if($keyword!=='keyword' && $state!=='select state' && $category!=='select category') {
    	$category_id = Category::where('name',"=", $category)->first();
		$category_id = $category_id->id;
	    $jobs = DB::table('jobs')
	    	->where('state',"=", $state)
            ->where('category_id',"=", $category_id)
            ->where( function($query) use ($keyword) 
            {
                $query->where('description', 'LIKE', '%'. $keyword .'%')
                      ->orWhere('title', 'LIKE', '%' . $keyword .'%');
            })
            ->paginate(3);
	}

		return View::make('results', compact('jobs'));
	}

	// public function searchResult($keyword, $state = 'select state', $category = 'select category') {
								// public function searchResult() {

								// 	$queryBuilder = Job::query();

								// 	if (Input::has('keywords'))
								// 	{
								// 		$queryBuilder->searchKeywords(Input::get('keywords'));
								// 	}

								// 	if (Input::has('states'))
								// 	{
								// 		$queryBuilder->searchState(Input::get('states'));
								// 	}

								// 	if (Input::has('categories'))
								// 	{
								// 		$queryBuilder->searchCategory(Input::get('categories'));
								// 	}

								// 	if (Input::has('keywords') AND Input::has('states'))
								// 	{
								// 		$queryBuilder->SearchKeywordAndState(Input::get('keywords'),Input::get('states'));
								// 	}

								// 	if (Input::has('keywords') AND Input::has('categories'))
								// 	{
								// 		$queryBuilder->SearchKeywordAndCategory(Input::get('keywords'),Input::get('categories'));
								// 	}

								// 	if (Input::has('keywords') AND Input::has('states') AND Input::has('categories'))
								// 	{
								// 		$queryBuilder->SearchKeywordStateAndCategory(Input::get('keywords'), Input::get('states'), Input::get('categories'));
								// 	}

								// 	$jobs= $queryBuilder->paginate(3);

								// 	return View::make('results', compact('jobs'));
								// 		// ->withTitle('Search Results')
								// 		// ->withKeyword($keyword)
								// 		// ->withState($state)
								// 		// ->withCategory($category);
								// }

}
