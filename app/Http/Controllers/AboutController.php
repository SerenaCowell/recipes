<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\About;

class AboutController extends Controller {

    public function about (){

        $info = About::find(1);
                return view('about', ['about' => $info]);
    }
}
