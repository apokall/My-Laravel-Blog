<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class AboutMeController extends Controller
{
    public function show() {

      if (View::exists('about-me')) {

        $view = view('about-me');

        $view->with('title','Обо мне');

        return $view;
}

  abort(404);

    }
}
