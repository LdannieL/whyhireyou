<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Statement;
use App\Models\Choice;
use Illuminate\Http\Request;

class AdminStatementController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$statements = Statement::with('choices')->paginate(10);
		$choices = Choice::get();

		return view('admin.statements.index', compact('statements','choices'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.statements.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$statement = new Statement();

		$statement->statement_number = $request->input("statement_number");
        $statement->text = $request->input("text");

		$statement->save();

		return redirect()->route('admin.statements.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$statement = Statement::with('choices')->find($id);
		// $statement = Statement::findOrFail($id);

		return view('admin.statements.show', compact('statement'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$statement = Statement::findOrFail($id);

		return view('admin.statements.edit', compact('statement'));
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
		$statement = Statement::findOrFail($id);

		$statement->statement_number = $request->input("statement_number");
        $statement->text = $request->input("text");

		$statement->save();

		return redirect()->route('admin.statements.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$statement = Statement::findOrFail($id);
		$statement->delete();

		return redirect()->route('admin.statements.index')->with('message', 'Item deleted successfully.');
	}

}
