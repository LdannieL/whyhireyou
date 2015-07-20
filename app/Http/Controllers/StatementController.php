<?php namespace App\Http\Controllers;
// session_start();

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Input;
use \Redirect;

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

		$visionary = 0;
		$change_maker = 0;
		$innovator = 0;
		$producer = 0;
		$collaborator = 0;

	if(!isset($_SESSION['visionary'])){
		$_SESSION['visionary'] = 0;
	}

	if(!isset($_SESSION['change_maker'])){
		$_SESSION['change_maker'] = 0;
	}

	if(!isset($_SESSION['innovator'])){
		$_SESSION['innovator'] = 0;
	}

	if(!isset($_SESSION['producer'])){
		$_SESSION['producer'] = 0;
	}

	if(!isset($_SESSION['collaborator'])){
		$_SESSION['collaborator'] = 0;
	}

		// $_SESSION['visionary'] = 0;
		// $_SESSION['change_maker'] = 0;
		// $_SESSION['innovator'] = 0;
		// $_SESSION['producer'] = 0;
		// $_SESSION['collaborator'] = 0;
		$result = [];

		// 	if(!isset($_SESSION['score'])){;

		// $_SESSION['score'] = 0	}
	
	// if($_POST){
		// $number = Input::get('id');
		$selected_choice = Input::get('choice');
			// dd($selected_choice);
		$previous_choice = Input::old('choice');

		$next = $number+1;
		
		/*
		*	Get total statements
		*/
		$total_no_statements = Statement::get()->count();
		// //Get result
		// $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
		// $total = $results->num_rows;
		
		
		// $choice_visionary = Choice::with('statement','profile')->where('statement_id','=',$number)->where('profile_id','=','1')->first()->id;
		// $choice_change_maker = Choice::with('statement','profile')->where('statement_id','=',$number)->where('profile_id','=','2')->first()->id;
		// $choice_innovator = Choice::with('statement','profile')->where('statement_id','=',$number)->where('profile_id','=','3')->first()->id;
		// $choice_producer = Choice::with('statement','profile')->where('statement_id','=',$number)->where('profile_id','=','4')->first()->id;
		// // $choice_producer = $choice_producer->id;
		// // dd($choice_producer);
		// $choice_collaborator = Choice::with('statement','profile')->where('statement_id','=',$number)->where('profile_id','=','5')->first()->id;

		/*
		*	Get correct choice
		*/

		$chosen = Choice::where('id','=',$selected_choice)->first()->profile_id;

	// dd($chosen);

		// $choice_visionary = Choice::with('statement','profile')->where('statement_id','=',$number)->where('profile_id','=','1')->first()->id;
		// $choice_change_maker = Choice::with('statement','profile')->where('statement_id','=',$number)->where('profile_id','=','2')->first()->id;
		// $choice_innovator = Choice::with('statement','profile')->where('statement_id','=',$number)->where('profile_id','=','3')->first()->id;
		// $choice_producer = Choice::with('statement','profile')->where('statement_id','=',$number)->where('profile_id','=','4')->first()->id;
		// // $choice_producer = $choice_producer->id;
		// // dd($choice_producer);
		// $choice_collaborator = Choice::with('statement','profile')->where('statement_id','=',$number)->where('profile_id','=','5')->first()->id;



		// $query = "SELECT * FROM `choices`
		// 			WHERE question_number = $number AND is_correct = 1";
					
		// //Get result
		// $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
		
		// //Get row
		// $row = $result->fetch_assoc();
		
		// //Set correct choice
		// $correct_choice = $row['id'];
		
		//Compare

		// if($selected_choice == $choice_visionary){
		// 	$visionary++;
		// }

		// if($selected_choice == $choice_change_maker){
		// 	$change_maker++;
		// }

		// if($selected_choice == $choice_innovator){
		// 	$innovator++;
		// }

		// if($selected_choice == $choice_producer){
		// 	$producer++;
		// }

		// if($selected_choice == $choice_collaborator){
		// 	$collaborator++;
		// }


		if($chosen == 1){
			$visionary = $visionary + 1;
			$_SESSION['visionary'] = $_SESSION['visionary'] + 1;
		}

		if($chosen == 2){
			$change_maker = $change_maker + 1;
			$_SESSION['change_maker'] =  $_SESSION['change_maker'] + 1;
		}

		if($chosen == 3){
			$innovator = $innovator + 1;
			$_SESSION['innovator'] =  $_SESSION['innovator'] + 1;
		}

		if($chosen == 4){
			$producer = $producer + 1;
			$_SESSION['producer'] =  $_SESSION['producer'] + 1;
		}

		if($chosen == 5){
			$collaborator = $collaborator + 1;
			$_SESSION['collaborator'] =  $_SESSION['collaborator'] + 1;
		}
			// $result = ['Visionary' => $visionary, 'Change Maker' => $change_maker, 'Innovator' => $innovator, 'Producer' => $producer, 'Collaborator' => $collaborator];
		$result = ['Visionary' => $_SESSION['visionary'], 'Change Maker' => $_SESSION['change_maker'], 'Innovator' => $_SESSION['innovator'], 'Producer' => $_SESSION['producer'], 'Collaborator' => $_SESSION['collaborator']];
		// $result = [$visionary, $change_maker, $innovator, $producer, $collaborator];
		// $result = asort($result);
		arsort($result);
		$sorted = [];
		foreach($result as $x => $x_value) {
			$sorted = [$x => $x_value];
		     // echo "Key=" . $x . ", Value=" . $x_value;
		     // echo "<br>";
		}
// 		dd($sorted);
// // $style = array_keys(array_slice($sorted,0,2));
// 		$style = array_slice($sorted,0,2);
// 		dd($style);
							// $style = array_keys(array_slice($sorted,0,1));
		// dd($style);
// $primary_style = $style[0];
// $secondary_style = $style[1];	
									$primary_style = array_keys(array_slice($sorted,0,1));
									$profile_style = $primary_style[0];
									$profile = Profile::where('style','=',$profile_style)->first();
									$description = $profile->description;
									$skills = $profile->skills;
									$quote = $profile->quote;

									$secondary_style = array_keys(array_slice($sorted,1,2));
		// dd($sorted);
// 		$sorted_result = array();
// foreach ($result as $key => $row)
// {
//    $sorted_result[$key] = $row['price'];
// }
// array_multisort($price, SORT_DESC, $inventory);
		
		// $primary_style = array_keys($result[0]);
		// $secondary_style = array_keys($result[1]);
					// $primary_style = array_keys($sorted,$sorted[0],true);
					// $secondary_style = array_keys($sorted$sorted[1],true);
		//Check if last question
					// if($number == $total_no_statements){
					// 	header("Location: {{route('statement/final')}}");
					// 	exit();
					// } else {
					// 	header("Location: {{route('statement/$next')}}");
					// }

		if($number == $total_no_statements)
		{
			var_dump($result);

			return view('statements.final', compact('primary_style','secondary_style','description','skills','quote'));
		} else {
			return redirect()->route('statements', [$next])->withInput();
		}
	}
} 