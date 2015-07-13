<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Job;
use App\Models\Category;
use App\Models\Type;
use App\Models\User;

use Illuminate\Http\Request;

class AdminJob1Controller extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$job1s =  Job::with('user', 'category', 'type')->paginate(5);
		$users = User::get();
        $categories = Category::get();
        $types = Type::get();

		return view('admin.job1s.index', compact('job1s', 'categories', 'types', 'users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$job1s =  Job::with('user', 'category', 'type')->get();
		$users = User::get();
        $categories = Category::get();
        $types = Type::get();
		return view('admin.job1s.create', compact('job1s', 'categories', 'types', 'users'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$job1 = new Job();
		$category = $request->input("category_id");
		$category_id = Category::where('name', '=', $category)->first();
		$category_id = $category_id->id;

		$user = $request->input("user_id");
		$user_id = User::where('name', '=', $user)->first();
		$user_id = $user_id->id;

		$type = $request->input("type_id");
		$type_id = Type::where('name', '=', $type)->first();
		$type_id = $type_id->id;

		$job1->category_id = $category_id;
        $job1->user_id = $user_id;
        $job1->type_id = $type_id;
        $job1->company_name = $request->input("company_name");
        $job1->title = $request->input("title");
        $job1->description = $request->input("description");
        $job1->city = $request->input("city");
        $job1->state = $request->input("state");
        $job1->contact_email = $request->input("contact_email");

		$job1->save();

		return redirect()->route('admin.job1s.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$job1 = Job::findOrFail($id);
		// $job1s =  Job::with('user', 'category', 'type')->findOrFail($id);

		return view('admin.job1s.show', compact('job1'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$job1 = Job::findOrFail($id);
		$users = User::get();
        $categories = Category::get();
        $types = Type::get();

		return view('admin.job1s.edit', compact('job1', 'categories', 'types', 'users'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$job1 = Job::findOrFail($id);

		$category = $request->input("category_id");
		$category_id = Category::where('name', '=', $category)->first();
		$category_id = $category_id->id;

		$user = $request->input("user_id");
		$user_id = User::where('name', '=', $user)->first();
		$user_id = $user_id->id;

		$type = $request->input("type_id");
		$type_id = Type::where('name', '=', $type)->first();
		$type_id = $type_id->id;

		$job1->category_id = $category_id;
        $job1->user_id = $user_id;
        $job1->type_id = $type_id;
        $job1->company_name = $request->input("company_name");
        $job1->title = $request->input("title");
        $job1->description = $request->input("description");
        $job1->city = $request->input("city");
        $job1->state = $request->input("state");
        $job1->contact_email = $request->input("contact_email");

		$job1->save();

		return redirect()->route('admin.job1s.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$job1 = Job::findOrFail($id);
		$job1->delete();

		return redirect()->route('admin.job1s.index')->with('message', 'Item deleted successfully.');
	}

}
