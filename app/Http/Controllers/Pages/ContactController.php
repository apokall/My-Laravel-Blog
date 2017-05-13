<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class ContactController extends Controller
{
    protected $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }

    public function show() {


      if (View::exists('contact')) {

        $view = view('contact');

        $view->with('title','Контакты и связь со мною');
        $view->with('name');
        print_r($this->request->except('_token'));

        return $view;
      }

      abort(404);

    }


}
