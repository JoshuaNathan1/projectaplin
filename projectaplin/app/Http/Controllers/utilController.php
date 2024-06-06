<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Kota;
use App\Models\Provinsi;
use Illuminate\Http\Request;


class utilController extends Controller
{
    public function provinsiPage()
    {
        $provinsi = Provinsi::orderBy("provinsi_nama")->get();
        return view("utils.provinsi", compact("provinsi"));
    }

    public function kotaByProvinsi(Request $req)
    {
        $var["provinsi"] = Provinsi::where("provinsi_id", $req->id)->first();
        $var["kota"] = Kota::where("provinsi_id", $req->id)->orderBy("kota_nama")->get();
        return view("utils.kota", $var);
    }

    public function addKota(Request $req)
    {
        $kota = new Kota();
        $kota->kota_nama = $req->nama;
        $kota->provinsi_id = $req->id;
        $kota->save();
        return redirect("/utils/kota/" . $req->id);
    }

    public function kecamatanPage(Request $req)
    {
        $var["kota"] = Kota::where("kota_id", $req->id)->first();
        $var["provinsi"] = Provinsi::where("provinsi_id", $var["kota"]['provinsi_id'])->first();
        $var["kecamatan"] = Kecamatan::where("kota_id", $req->id)->orderBy("kecamatan_nama")->get();
        return view("utils.kecamatan", $var);
    }

    public function addKecamatan(Request $req)
    {
        $kec = new Kecamatan();
        $kec->kecamatan_nama =  $req->nama;
        $kec->kota_id = $req->id;
        $kec->save();
        return redirect("/utils/kecamatan/" . $req->id);
    }

    public function loadKota(Request $req)
    {
        $var["kota_id"] = $req->kota_id;
        $var["kota"] = Kota::where("provinsi_id", $req->provinsi_id)->orderBy("kota_nama")->get();
        $view = view("utils.selectKota", $var);
        return $view;
    }

    public function loadKecamatan(Request $req)
    {
        $var["kecamatan_id"] = $req->kecamatan_id;
        $var["kecamatan"] = Kecamatan::where("kota_id", $req->kota_id)->get();
        $view = view("utils.selectKecamatan", $var);
        return $view;
    }
}
