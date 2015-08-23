<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CreateArticleRequest;

class ArticlesController extends Controller {

    /**
     *
     * Function that returns articles on public/article
     * @return \Illuminate\View\View
     */
	public function index(){
        $articles = Article::latest('created_at')->paginate(3);
        $articles->setPath('/kksisak/public/article');
        return view('articles.index', compact('articles'));
    }

    /**
     * Function that returns articles on public/index
     * @return \Illuminate\View\View
     */
    public function main(){
        $articles = Article::latest('created_at')->paginate(4);
        $articles->setPath('/kksisak/public/index');
        return view('pages.index', compact('articles'));
    }

    public function show($slug){
        $article = Article::findBySlugOrFail($slug);

        return view('articles.show', compact('article'));
    }

    public function create(){

    }

    /**
     * Save new article
     *
     * @param CreateArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(CreateArticleRequest $request){

        Article::create($request->all());

        return redirect('article');
    }


    public function edit($id){
        
    }

    public function update($id){
        
    }

    public function destroy($id){

    }

}
