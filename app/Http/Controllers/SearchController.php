<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Office;
use App\Models\Properti;

class SearchController extends Controller
{
    public function searchProp(Request $req)
    {

        $type = $req->type;
        if ($type == "") {
            $param['prop'] = Properti::all();
        }
        // dd(Office::where("type", $type)->update(["search"=> $req->all()]));
        return view('utils.card_prop', $param);
    }
}
