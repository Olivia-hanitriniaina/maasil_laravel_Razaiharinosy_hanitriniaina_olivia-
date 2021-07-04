<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Article;
use App\Author;

class ArticleController extends Controller
{
    //
    
    // get all articles
    public function index()
    {
        $article = new Article();
        $data['title'] = 'All articles';
        $data['view'] = 'article';
        $data['articles'] = $article::join('acteur', 'articles.id_author', '=', 'acteur.id_acteur')->orderBy('articles.created_at')->get(['articles.*','acteur.nom']);
        return view('template')->with($data);
    }
    
    // detail article
    public function article($id)
    {
        $article = new Article();
        $data['view'] = 'articledetail';
        $data['title'] = 'Article detail';
        $data['article'] = $article::join('acteur', 'articles.id_author', '=', 'acteur.id_acteur')->where('articles.id_article', $id)->first();
        return view('template')->with($data);
    } 
    
    // index of articles creation
    public function craftindex($id)
    {
        $author = new Author();
        $data['view'] = 'articlecreation';
        $data['title'] = 'Create new article';
        $data['authors'] = $author::all();
        if(isset($id)){
            if($id == 0){
                $data['status'] = ' ';
            }else{
                $data['status'] = 'Article saved';
            }
        }
        return view('template')->with($data);
    }
    
    // new article insertion
    public function createarticle(Request $request)
    {
        $article = new Article();
        if($request->title == null || $request->content == null || $request->author == null){
            echo 'An article must have at least a title, a content and an author.';
        }else{
            $article->titre = $request->title;
            $article->text = $request->content;
            $article->id_author = $request->author;
            
            if($request->session()->has('login')){
                $article->save();
                return redirect ('/new-article/1');
            }else{
                return redirect ('/login');
            }
        }
    }
}
