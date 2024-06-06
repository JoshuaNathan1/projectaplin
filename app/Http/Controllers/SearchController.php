<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Office;

class SearchController extends Controller
{
    public function searchPage(Request $req){

        $type = $req->type;
        dd(Office::where("type", $type)->update(["search"=> $req->all()]));
        return view('search');
    }


}
