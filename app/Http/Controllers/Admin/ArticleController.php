<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ArticleStoreRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function create(){
        $user = Auth::user();
        $article = Article::firstOrNew(['user_id'=>Auth::id()]);
        return view('article.create_edit',compact('user','article'));
    }

    public function store(ArticleStoreRequest $request){
        $article = new Article();
        $article->title = $request->input('title');
        $article->slug = $request->input('slug');
        $article->image = $request->input('image');
        $article->content = $request->input('content');
        $article->description = $request->input('description');
        $article->user_id = Auth::id();
        $article->save();
        redirect()->route('article.edit',$article->id);
    }

    public function edit($id){
        $user = Auth::user();
        $article = Article::findOrFail($id);
        return view('article.create_edit',compact('user','article'));
    }

    public function update(ArticleStoreRequest $request, $id){
        $data = $request->all();
        $article = Article::findOrFail($id);
        $article->update($data);
        return redirect()->route('article.edit',$article->id);
    }

}
