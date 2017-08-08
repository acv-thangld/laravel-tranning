<?php

namespace App\Http\Controllers;
use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\ArticleFormRequest;
class ArticlesController extends Controller
{
    public function index()
   	{
   		$articles =Article::paginate(4);
   		return view('articles.index',compact('articles'));
   	}
   	public function show($id)
   	{
   		$articles =Article::find($id);
   		return view('articles.show', compact('articles'));

   	}
      public function create()
      {
         return view('articles.create');
      }
      public function store(ArticleFormRequest $request)
      {
         $title =$request->input('title');
         $content =$request->input('content');
         Article::create([
            'title'     => $title,
            'content'   => $content
            ]);
         return redirect()->route('article.index');
      }
      public function edit($id)
      {
         $articles =Article::find($id);
         return view('articles.edit',compact('articles'));
      }
      public function update($id, ArticleFormRequest $request)
      {
         $articles =Article::find($id);
         $articles->update(
            [
               'title' => $request->get('title'),
               'content'=>$request->get('content')
            ]);
         return redirect()->route('article.index');
      }
      public function delete($id)
      {  
         $articles = Article::find($id);
         $articles->delete();
         return redirect()->route('article.index');
      }
}
