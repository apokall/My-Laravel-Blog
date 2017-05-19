<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\Article;
use App\Country;
use DB;


class Core extends Controller
{
  protected static $articles;

  public function __construct() {

  }

  public static function addArticles($array) {
      return self::$articles[] = $array;
  }

  //list blog articles
  public function getArticles(Request $request) {
      $country = Country::find(2);
      $user = User::find(1);
      // $country = $user->country;
      // dump($country->user);
      dump($user->articles);
      // $article = Article::all();
      // dump($article);
      $articles = $user->articles;
      foreach ($articles as $article => $name) {
        echo $articles.'<br />';
        echo $name->postTitle.'<br />';
      }

      return;
  }

  //article
  public function getArticle($id) {
    echo $id;
  }
}
