<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class staticPageController extends Controller
{
    public function cds() {

        
        return view('cds');
    }
}
