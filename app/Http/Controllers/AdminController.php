<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Route;

class AdminController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
        $articles = Article::latest('created_at')->paginate(20);
        $articles->setPath('/admin/articles');
        return view('admin.articles', compact('articles'));
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getCreate()
	{
        return view('admin.create');

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
	public function getShow($slug)
	{
        $article = Article::findBySlugOrFail($slug);
        return view('admin.show', compact('article'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit($id)
	{
//		var_dump(Route::currentRouteName());
//		dd();
        $article = Article::find($id);
        return view('admin.edit', compact('article'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postEdit($id)
	{
        $rules = array(
            'title' => 'required',
            'content' => 'required'
        );

        $article = Article::findOrFail($id);
        $article->title = Input::get('title');
        $article->content = Input::get('content');
        $article->save();

        return redirect('admin');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getDelete($id)
	{
		$article = Article::find($id);
        $article->destroy($id);

        return redirect('admin');
	}

}
