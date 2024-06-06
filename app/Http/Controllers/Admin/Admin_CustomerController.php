<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class Admin_CustomerController extends Controller
{
    public function customerPage()
    {
        $var = [];
        $var['customer_nav'] = "active";
        return view("admin.customer.customer", $var);
    }

    public function loadCustomer(Request $req)
    {
        $var['customers'] = User::where('role', 'pengguna')->get();
        $view = view("admin.customer.tabelcustomer", $var);
        return $view;
    }
}
