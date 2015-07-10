<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Job;
use App\Models\Category;
use App\Models\Type;
use Illuminate\Http\Request;

use \Input, \Redirect, \View;

class JobsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $jobs =  Job::with('user', 'category', 'type')->get();
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
	public function search() {
		// $jobs =  Job::get();
		$keyword = Input::get('keywords');
		$state = Input::get('states');
		$category = Input::get('categories');		

		if (empty($keyword)) {
			return Redirect::route('home')
				->withError('No keyword entered, please try again');
		} elseif ($state=='select state') {
			return Redirect::route('home')
				->withError('No state entered, please try again');
		} elseif ($category=='select category') {
			return Redirect::route('home')
				->withError('No category entered, please try again');
		} 

		return Redirect::route('searchResult', [$keyword, $state, $category]);
	}

	public function searchResult($keyword, $state = 'select state', $category = 'select category') {
		$jobs =  Job::with('user', 'category', 'type')->get();

		$category_id = Category::where('name',"=", $category)->first();
		$category_id = $category_id->id;
		// $jobs =  Job::where('description', 'LIKE', '%'.$keyword.'%')->where('state',"=", $state)->where('category_id',"=", $category_id)->paginate(3);

					// if ($state=null AND $category=null){
					// 	$jobs =  Job::where('description', 'LIKE', '%'.$keyword.'%')->paginate(3);	
					// } else {

					// 	$jobs =  Job::where('description', 'LIKE', '%'.$keyword.'%');
					// }
					
					// if ($state!=null AND $category=null) {
					// 	$jobs = $jobs->where('state',"=", $state)->paginate(3);	
					// } else {
					// 	$jobs = $jobs->where('state',"=", $state);
					// }

					// if ($category!=null) {
					// 	$category_id = Category::where('name',"=", $category)->find(1);
					// 	$category_id = $category_id->id;
					// 	$jobs = $jobs->where('category_id',"=", $category_id)->paginate(3);
					// }


		// if ($state=='select state' AND $category=='select category') $jobs =  Job::where('description', 'LIKE', '%'.$keyword.'%')->paginate(3);
		// if ($category!='select category'){
		// 	$category_id = Category::where('name',"=", $category)->find(1);
		// 	$category_id = $category_id->id;
		// }
		$jobs =  Job::where('description', 'LIKE', '%'.$keyword.'%')->where('state',"=", $state)->where('category_id',"=", $category_id)->paginate(3);

		return View::make('results', compact('jobs'))
			->withTitle('Search Results')
			->withKeyword($keyword)
			->withState($state)
			->withCategory($category);
	}
}