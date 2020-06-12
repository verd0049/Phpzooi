<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;
use App\Article;

class BlogController extends Controller
{

    public function blog($id)
    {
        $articles = \DB::table('articles')->where('id', $id)->first();
        return view('blog', [
            'articles' => $articles,
        ]);
    }

    public function create()
    {

        if (Gate::allows('create-blog')) {
            return view('create');
        } else {
            abort('403');
        }
    }

    public function store()
    {
        if (Gate::allows('store-blog')) {
            Article::create($this->validateArticle());
            return redirect('/blog');
        } else {
            abort('403');
        }







    }

    public function edit($id)
    {
        if (Gate::allows('edit-blog')) {
            $article = Article::find($id);
            return view('edit', compact('article'));
        } else {
            abort('403');
        }

    }

    public function update($id)
    {

        if (Gate::allows('create-blog')) {
            $article = Article::find($id);

            $article->update($this->validateArticle());

            return redirect($article->path());
        } else {
            abort('403');
        }



    }

    /**
     * @return array
     */
    public function validateArticle()
    {
        return request()->validate([
            'title' => ['required', 'string'],
            'excerpt' => ['required', 'string'],
            'body' => ['required', 'string']
        ]);
    }

}
