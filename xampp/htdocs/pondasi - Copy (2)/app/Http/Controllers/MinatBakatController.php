<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MinatBakatController extends Controller
{
    public function minatbakat(){
        return view("minatbakat/index");
    }
}
