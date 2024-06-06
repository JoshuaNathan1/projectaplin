<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchPage(Request $req){

        $type = $req->type;
        return view('search');
    }


}
