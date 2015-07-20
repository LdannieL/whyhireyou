<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Profile;
use Illuminate\Http\Request;

class AdminProfileController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$profiles = Profile::paginate(10);

		return view('admin.profiles.index', compact('profiles'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.profiles.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$profile = new Profile();

		$profile->style = $request->input("style");
        $profile->description = $request->input("description");
        $profile->skills = $request->input("skills");
        $profile->quote = $request->input("quote");
        $profile->profile = $request->input("profile");

		$profile->save();

		return redirect()->route('admin.profiles.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$profile = Profile::findOrFail($id);

		return view('admin.profiles.show', compact('profile'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$profile = Profile::findOrFail($id);

		return view('admin.profiles.edit', compact('profile'));
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
		$profile = Profile::findOrFail($id);

		$profile->style = $request->input("style");
        $profile->description = $request->input("description");
        $profile->skills = $request->input("skills");
        $profile->quote = $request->input("quote");
        $profile->profile = $request->input("profile");

		$profile->save();

		return redirect()->route('admin.profiles.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$profile = Profile::findOrFail($id);
		$profile->delete();

		return redirect()->route('admin.profiles.index')->with('message', 'Item deleted successfully.');
	}

}