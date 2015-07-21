<?php namespace App\Http\Controllers;
// session_start();

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Input;
use \Redirect;
use \Session;

use App\Models\Statement;
use App\Models\Choice;
use App\Models\Profile;
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
		// $choices = Choice::with('profiles')->get();
		$choices = Choice::get();

		return view('statements.index', compact('statements','choices'));
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	// public function show($id)
	// {
	// 	$statement = Statement::with('choices')->find($id);
	// 	// $statement = Statement::findOrFail($id);
	// 	// $choices = Choice::with('profiles')->get();
	// 	$choices = Choice::where('statement_id','=',$id);
	// 	dd($choices);

	// 	return view('statements.show', compact('statement','choices'));
	// }

	public function show($id)
	{
		$statement = Statement::with('choices')->find($id);
		$choices = Choice::with('statement','profile')->where('statement_id','=',$id)->get();
		// $statement = Statement::findOrFail($id);
		// $choices = Choice::with('profiles')->get();
		// $choices = Choice::where('statement_id','=',$id);
		// dd($choices);

		return view('statements.show', compact('statement','choices'));
	}

	public function processForm()
	{
		$number = Input::get('number');
		// dd($number);
		$statement = Statement::with('choices')->find($number);
		$choices = Choice::with('statement','profile')->where('statement_id','=',$number)->get();

		

	if(!Session::has('visionary')) Session::put('visionary',0);
	if(!Session::has('change_maker')) Session::put('change_maker',0);
	if(!Session::has('innovator')) Session::put('innovator',0);
	if(!Session::has('producer')) Session::put('producer',0);
	if(!Session::has('collaborator')) Session::put('collaborator',0);
	
		$result = [];

		$selected_choice = Input::get('choice_id');
		$previous_choice = Input::old('choice');

		$next = $number+1;
		
		/*
		*	Get total statements
		*/
		$total_no_statements = Statement::get()->count();


		$chosen = Choice::where('id','=',$selected_choice)->first()->profile_id;

	// dd($chosen);

		if($chosen == 1){
			$value = Session::get('visionary');
			Session::put('visionary',$value+1);
		}

		if($chosen == 2){
			$value = Session::get('change_maker');
			Session::put('change_maker',$value+1);
		}

		if($chosen == 3){
			$value = Session::get('innovator');
			Session::put('innovator',$value+1);
		}

		if($chosen == 4){
			$value = Session::get('producer');
			Session::put('producer',$value+1);
		}

		if($chosen == 5){
			$value = Session::get('collaborator');
			Session::put('collaborator',$value+1);
		}
			
		$result = ['Visionary' => Session::get('visionary'), 'Change Maker' => Session::get('change_maker'), 'Innovator' => Session::get('innovator'), 'Producer' => Session::get('producer'), 'Collaborator' => Session::get('collaborator')];
		// asort($result);
		$sortiran = asort($result);
		arsort($result);
		$sorted = [];
		foreach($result as $x => $x_value) {
			$sorted = [$x => $x_value];
		     // echo "Key=" . $x . ", Value=" . $x_value;
		     // echo "<br>";
		}
// 		dd($sorted);
									//RADI OVAKO
									$primary_style = array_keys(array_slice($result,0,1));
									$profile_style = $primary_style[0];
									$profile = Profile::where('style','=',$profile_style)->first();
									$description = $profile->description;
									$skills = $profile->skills;
									$quote = $profile->quote;

									$secondary_style = array_keys(array_slice($result,1,1));
									
									// $primary_style = array_shift($result);
									// $profile_style = $primary_style[0];
									// $profile = Profile::where('style','=',$profile_style)->first();
									// $description = $profile->description;
									// $skills = $profile->skills;
									// $quote = $profile->quote;

									// $secondary_style = array_keys(array_slice($sorted,1,1));

									// $primary_style = array_keys(array_slice($sorted,0,1));
									// $profile_style_primary = $primary_style[0];
									// $profile_primary = Profile::where('style','=',$profile_style_primary)->first();
									// $description_primary = $profile_primary->description;
									// $skills_primary = $profile_primary->skills;
									// $quote_primary = $profile_primary->quote;

									// $secondary_style = array_keys(array_slice($sorted,0,1));
									$profile_style_sec = $secondary_style[0];
									$profile_secondary = Profile::where('style','=',$profile_style_sec)->first();
									$description_secondary = $profile_secondary->description;
									$skills_secondary = $profile_secondary->skills;
									$quote_secondary = $profile_secondary->quote;

		// dd($sorted);

		if($number == $total_no_statements)
		{
			var_dump($result);
			// echo key(reset($result));
			// echo key($result[1]);
			// var_dump($sorted);
			// var_dump($sortiran);
			// var_dump($primary_style);
			// var_dump($secondary_style);

			Session::forget('visionary');
			Session::forget('change_maker');
			Session::forget('innovator');
			Session::forget('producer');
			Session::forget('collaborator');

			return view('statements.final', compact('primary_style','secondary_style','description','skills','quote', 'description_secondary', 'skills_secondary','quote_secondary'));
		} else {
			return redirect()->route('statements', [$next])->withInput();
		}
	}
} 