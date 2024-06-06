<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class User_HomeController extends Controller
{
    public function homePage(){
        return view("user.homeUser");
    }
}
