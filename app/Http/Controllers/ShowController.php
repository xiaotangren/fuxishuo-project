<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{

    public function Index()
    {
        return view('Index.Show',['res'=>'1111']);
    }


}

