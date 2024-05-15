<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agen;
use App\Models\Kota;
use App\Models\Office;

use App\Models\User;
use Illuminate\Http\Request;

use App\Models\Provinsi;

class Admin_AgenController extends Controller
{
    public function pageAdd(Request $req)
    {
        $var = [];
        // $var["offices"] = Office::all();
        $var["offices"] = Kota::join("office", "kota.kota_id", "=", "office.kota_id")
            ->join("provinsi", "kota.provinsi_id", "=", "provinsi.provinsi_id")
            ->select("kota_nama", "office.nama as office_nama", 'office_id', "provinsi_nama")->get();
        if (isset($req->office_id)) {
            $var['office_id'] = $req->office_id;
        }
        $var["provinsi"] = Provinsi::all();
        return view("admin.Agen.addAgen", $var);
    }

    public function addAgen(Request $req)
    {
        $user = new User();
        $user->username = $req->username;
        $user->full_name = $req->full_name;
        $user->password = $req->password;
        $user->email = $req->email;
        $user->hp = $req->hp;
        $user->profile_pic = $req->profile_pic;
        $user->role = 'agen';
        $user->save();

        $agen = new Agen();
        $agen->username = $req->username;
        $agen->office_id = $req->office;
        $agen->save();

        return redirect("/admin/office/" . $req->office);
    }

    public function loadAgen(Request $req)
    {
        $var["office"] = Office::where("office_id", "=", $req->office_id)->first();
        $head = $var["office"]["username"];
        $var["agen"] = Agen::where("office_id", "=", $req->office_id)
            ->where("username", "!=", $head)->get();
        $view = view("admin.agen.cardAgen", $var);
        return $view;
    }
}
