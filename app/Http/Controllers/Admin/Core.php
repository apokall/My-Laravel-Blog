<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\Article;
use App\Country;
use App\Role;
use DB;


class Core extends Controller
{
  protected static $articles;

  public function __construct()
  {

  }

  public static function addArticles($array)
  {
      return self::$articles[] = $array;
  }

  //list blog articles
  public function getArticles(Request $request)
  {
      // $country = Country::find(2);
      // $user = User::find(1);
      // $testt = Article::find(3);
      // $role = Role::find(2);
      // dump($testt->user->name);
      // $country = $user->country;
      // dump($country->user);
      // dump($user->articles);
      // $article = Article::all();
      // dump($article);
      // $articles = $user->articles;
      // foreach ($articles as $article) {
      //   dump($article).'<br />';
      //   dump($article->postTitle).'<br />';
      // }

      // dump($role->users);
      //
      // $userz = User::with('articles' , 'roles')->get();
      //
      // foreach($userz as $user )
      // {
      //   // echo ($user->articles) . '<br>'
      //   // dump($user->articles);
      //   foreach ($user->articles as $article)
      //   {
      //     dump($article->user->name);
      //   }
      // }
      // echo "next";
      // $usershas = User::has('articles')->get();
      //
      // foreach($usershas as $user)
      // {
      //   dump($user);
      // }

      $article = Article::find(3);

      $newPost = $article->postTitle = 'title seted ok';
      // $article->save($newPost);
      echo $article->postTitle;

      return;
  }

  public function addArticle($user_id)
  {
    $user = User::find($user_id);
    $article = new Article
    ([
      'postTitle' => 'New title',
      'text' => 'New text'
    ]);
    $user->articles()->save($article);
  }

  public function updateArticle($user_id, $article_id)
  {
    $user = User::find($user_id);
    $user->articles()->where('id', $article_id)->update(['text' => 'request text']);
  }

  //article
  public function getArticle($id)
  {
    echo $id;
  }
}
