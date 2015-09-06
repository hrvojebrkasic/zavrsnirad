<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CreateArticleRequest;
use App\Media;
use Auth;
use Input;
use Intervention\Image\Facades\Image;
use Validator;

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

        $article = new Article;
        $article->fill(Input::all());
        $article->user_id = Auth::user()->id;
//
//        $validator = Validator::make($article, Article::$rules, Article::$messages);
//        if($validator->fails()){
//            $error_list = $validator->messages();
//        }

        $article->save();

        $destinationPath = public_path().'/img/';
        $files = Input::file('photo');
        if($files[0] != null){
            foreach ($files as $file) {
                $media = new Media;
                $extension = $file->getClientOriginalExtension();
                $file_name = rand(10000, 99999).'.'.$extension;
                $file->move($destinationPath, $file_name);
                $file_resize = Image::make($destinationPath.$file_name);
                $file_resize->resize(300, null, function($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $file_resize->save();
                $media->file_name = $file_name;
                $media->article_id = $article->id;
                $media->save();
            }
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
