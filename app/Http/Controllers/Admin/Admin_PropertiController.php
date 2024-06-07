<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Properti;

class Admin_PropertiController extends Controller
{
    public function propertiPage()
    {
        $var["properti"] = Properti::all();
        return view("agen.properti.properti", $var);
    }
}
