<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\League;
use App\Team;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class TeamsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$teams = Team::orderBy('league_id', 'asc')->get();
		return view('admin.teams.index', compact('teams'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		//povuci popis liga i proslijedi u view
		$list=array();
		$leagues = League::all();
		foreach ($leagues as $league) {
			$list[$league->id] = $league->name;
		}
		return view('admin.teams.create', compact('list'));
	}
	public function postCreate()
	{
		$team = new Team;
//		$league->name = Input::get('name');
		$input = Input::all();
		$team->fill($input);
		$team->save();
		return Redirect::to('admin');
	}

	public function getDelete($id)
	{
		$team = Team::find($id);
		$team->destroy($id);

		return redirect('admin');
	}



	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
