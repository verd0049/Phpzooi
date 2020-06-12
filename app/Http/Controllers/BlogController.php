<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function blog($id){
        $articles = \DB::table('articles')->where('id', $id)->first();
        return view('blog', [
            'articles' => $articles,
        ]);
    }

    public function create() {
        return view('create');
    }

    public function store() {

        Article::create($this->validateArticle());

        return redirect('/blog');
    }

    public function edit($id) {
        $article = Article::find($id);
        return view('edit', compact ('article'));
    }

    public function update($id) {
        $article = Article::find($id);

        $article->update($this->validateArticle());

        return redirect($article->path());

    }

    /**
     * @return array
     */
    public function validateArticle()
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }

}
