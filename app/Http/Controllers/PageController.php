<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class PageController extends Controller
{
    public function blogPagina(){
        $articles = \DB::table('articles');
        $articles = Article::All();

        return view('blogpage', [
            'articles' => $articles,
        ]);
    }

    //laat pagina's doorlinken
    public function pagina($page){
        return view($page);
    }


}
