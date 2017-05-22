<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
  public function show()
  {
    return view('admin',
    [
      'title' => 'about-me',
    ]);
  }


}
