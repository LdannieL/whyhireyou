<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Choice;
use Illuminate\Http\Request;

class AdminChoiceController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$choices = Choice::paginate(10);

		return view('admin.choices.index', compact('choices'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.choices.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$choice = new Choice();

		$choice->statement_id = $request->input("statement_id");
        $choice->statement_number = $request->input("statement_number");
        $choice->text = $request->input("text");
        $choice->profile = $request->input("profile");
        $choice->value = $request->input("value");

		$choice->save();

		return redirect()->route('admin.choices.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$choice = Choice::findOrFail($id);

		return view('admin.choices.show', compact('choice'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$choice = Choice::findOrFail($id);

		return view('admin.choices.edit', compact('choice'));
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
		$choice = Choice::findOrFail($id);

		$choice->statement_id = $request->input("statement_id");
        $choice->statement_number = $request->input("statement_number");
        $choice->text = $request->input("text");
        $choice->profile = $request->input("profile");
        $choice->value = $request->input("value");

		$choice->save();

		return redirect()->route('admin.choices.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$choice = Choice::findOrFail($id);
		$choice->delete();

		return redirect()->route('admin.choices.index')->with('message', 'Item deleted successfully.');
	}

}
