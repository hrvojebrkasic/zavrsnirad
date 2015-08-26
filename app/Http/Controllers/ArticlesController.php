<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CreateArticleRequest;
use App\Media;
use Auth;
use Input;

class ArticlesController extends Controller {

    /**
     *
     * Function that returns articles on public/article
     * @return \Illuminate\View\View
     */
	public function index(){
        $articles = Article::latest('created_at')->paginate(3);
        $articles->setPath('/article');
        return view('articles.index', compact('articles'));
    }

    /**
     * Function that returns articles on public/index
     * @return \Illuminate\View\View
     */
    public function main(){
        $articles = Article::latest('created_at')->paginate(4);
        $articles->setPath('/index');
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

        $destinationPath = public_path().'/img/';
//        Input::file('photo')->move($destinationPath);
        $article = new Article;
        $article->fill(Input::all());
        $article->user_id = Auth::user()->id;
        $article->save();
//        $media = new Media;
//        $media->article_id = $article->id;
//        $extension = Input::file('photo')->getClientOriginalExtension();
//        $media->file_name = rand(10000, 99999).'.'.$extension;
//        $media->save();
        $files = Media::all();
        foreach ($files as $file) {
            $media = new Media;
            $extension = $media->getClientOriginalExtension();
            $media->file_name = rand(10000, 99999).'.'.$extension;
            $media->save();
            $article->media()->attach($media->id);
        }

        return redirect('article');
    }


    public function edit($id){
        
    }

    public function update($id){
        
    }

    public function destroy($id){

    }

}
