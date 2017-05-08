<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Core extends Controller
{
  //list blog articles
  public function getArticles() {
    echo "Admin blog";
  }

  //article
  public function getArticle($id) {
    echo $id;
  }
}
