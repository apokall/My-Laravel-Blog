<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use DB;

class BlogController extends Controller
{
    public function show() {

      if (View::exists('blog')) {

        $articles = DB::select('select * from `articles`');

        dump($articles);

        return view('blog',
        [
          'title' => 'Блог',
          'articles' => $articles,
        ]);
}

  abort(404);

    }
}
