<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class BlogController extends Controller
{
    public function show() {

      if (View::exists('blog')) {

        $view = view('blog');

        $view->with('title','Блог');

        return $view;
}

  abort(404);

    }
}
