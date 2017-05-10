<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\View;

class ContactController extends Controller
{
    public function show(Request $request) {

//
//         print_r($request->all());
//       if (View::exists('contact')) {
//
//         $view = view('contact');
//
//         $view->with('title','Контакты и связь со мною');
//
//         return $view;
// }
//
//   abort(404);
  print_r($request->all());

    return view('contact',['title'=>'Контакты']);
    }


}
