<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        return view('articles', ['articles' => Article::all()]);
    }

    public function show(Article $article)
    {
        return view('article', ['article' => $article]);
    }

    public function edit(Article $article)
    {
        return view('edit', ['article' => $article]);
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles')->with('status', 'Article successfully deleted');
    }

    // HTTP Requests
    public function store(Request $request)
    {
        $article = new Article;
        $article->title = $request->input('title');
        $article->article = $request->input('article');
        $article->author = Auth::user()->name;
        $article->save();
        return redirect()->route('articles')->with('status', 'Article successfully added');
    }

    public function update(Request $request, Article $article)
    {
        $article->title = $request->input('title');
        $article->article = $request->input('article');
        $article->author = Auth::user()->name;
        $article->save();
        return redirect()->route('articles')->with('status', 'Article successfully updated');
    }
}
