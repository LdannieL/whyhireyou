<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Statement;
use App\Models\Choice;
use Illuminate\Http\Request;

class StatementController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$statements = Statement::with('choices')->paginate(10);
		$choices = Choice::get();

		return view('statements.index', compact('statements','choices'));
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

		return view('statements.show', compact('statement','choices'));
	}
}