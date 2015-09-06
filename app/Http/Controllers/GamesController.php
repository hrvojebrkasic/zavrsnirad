<?php namespace App\Http\Controllers;

use App\Game;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Team;
use DB;
use Illuminate\Http\Request;
use Input;
use Redirect;

class GamesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
//		$games = Game::latest('created_at')->paginate(20);
		$games = Game::orderBy('round', 'desc')->get();
		return view('admin.games.index', compact('games'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		$list=array();

		$teams = Team::all();

		foreach ($teams as $team) {
			$list[$team->id] = $team->league->name.' - '.$team->team_name;
		}
		return view('admin.games.create', compact('list'));
	}
//		return view('admin.games.create');
//	}

	public function postCreate()
	{
		$games = Input::get('game');
		foreach($games as $g){
			$game = new Game;
			$game->fill($g);
			$game->save();
		}
		return Redirect::to('admin/games');
	}

	public function getDelete($id)
	{

		$game = Game::find($id);
		$game->destroy($id);

		return Redirect::to('admin/games');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

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
