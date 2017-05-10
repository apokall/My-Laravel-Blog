<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class MainController extends Controller
{
  public function show() {

    if (View::exists('main')) {

      $view = view('main');

      $view->with('title','Главная страница сайта');

      return $view;
}

  abort(404);

  }
}
