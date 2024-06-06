<?php

namespace App\Http\Controllers\Admin;

use App\Models\Agen;
use App\Models\Provinsi;
use App\Models\Kota;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Office;

class Admin_OfficeController extends Controller
{
    public function officePage()
    {
        $var["offices"] = Office::all();
        $var["office_nav"] = "active";
        return view("admin.office.office", $var);
    }

    public function addPage()
    {
        $var["provinsi"] = Provinsi::all();
        return view("admin.office.addOffice", $var);
    }

    public function do_addOffice(Request $req)
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

        $office = new Office();
        $office->nama = $req->nama;
        $office->alamat = $req->alamat;
        $office->telp = $req->telp;
        $office->kota_id = $req->kota;
        $office->username = $req->username;
        $office->save();

        $agen = new Agen();
        $agen->username = $user->username;
        $agen->office_id = $office->office_id;
        $agen->save();

        return redirect("/admin/office");
    }

    public function editPage(Request $req)
    {
        $var["provinsi"] = Provinsi::all();
        $var["office"] = Office::where('office_id', "=", $req->id)->first();
        $var["agen"] = Agen::where('office_id', "=", $req->id)->get();

        return view("admin.office.editOffice", $var);
    }

    public function do_EditOffice(Request $req)
    {
        $office = Office::where('office_id', "=", $req->id)->first();
        $office->nama = $req->nama;
        $office->alamat = $req->alamat;
        $office->telp = $req->telp;
        $office->username = $req->agen;
        $office->kota_id = $req->kota;
        $office->save();
        return redirect("/admin/office");
    }

    public function deleteOffice(Request $req)
    {
        $office = Office::where('office_id', $req->id)->first();
        $agen = User::where('office_id', "=", $req->id)->get();
        foreach ($agen as $a) {
            $a->delete();
        }
        $office->delete();
        return redirect("/admin/office");
    }

    public function viewOffice(Request $req)
    {
        $var["office"] = Office::where('office_id', $req->id)->first();
        return view("admin.office.viewOffice", $var);
    }
}
