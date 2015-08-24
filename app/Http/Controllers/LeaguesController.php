<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\League;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class LeaguesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
//		if($id) {
//			return $this->doAdmin();
//		}

//		$league = App::make('League');
		$league = new League();
        return view('includes.dashboard', ['league' => $league]);
    }

	public function getCreate()
	{
		return view('admin.leagues.create');

	}

	public function postCreate()
	{
		$league = new League;
//		$league->name = Input::get('name');
		$input = Input::all();
		$league->fill($input);
		$league->save();
		return Redirect::to('admin');
	}

	public function getSeniori()
	{
		return view('admin.leagues.seniori.index');
	}

	public function postIndex()
	{
//		if($id) {
//			return $this->doAdmin();
//		}

//		$league = App::make('League');
		$league = new League();
		return view('includes.dashboard', ['league' => $league]);
	}

	protected function doAdmin()
	{
		return view('admin.leagues.seniori.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
//	public function create()
//	{
//        return view('admin.leagues.create');
//    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
//	public function store()
//	{
//        $league = new League;
//        $league->name = Input::get('name');
//        $league->save();
//        return Redirect::to('admin');
//	}

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
