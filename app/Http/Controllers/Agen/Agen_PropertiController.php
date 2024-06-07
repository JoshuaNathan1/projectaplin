<?php

namespace App\Http\Controllers\Agen;

use App\Http\Controllers\Controller;
use App\Models\Kecamatan;
use App\Models\Kota;
use App\Models\Properti;
use App\Models\Proptype;
use App\Models\Provinsi;
// use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Agen_PropertiController extends Controller
{
    public function propertiPage()
    {
        $var["properti"] = Properti::where("agen_id", session()->get("user")->username)->get();
        return view("agen.properti.properti", $var);
    }

    public function addPage()
    {
        $var["proptype"] = Proptype::all();
        $var["provinsi"] = Provinsi::all();
        return view("agen.properti.addProperti", $var);
    }

    public function do_addPage(Request $req)
    {
        $properti = new Properti();
        $properti->judul = $req->judul;
        $properti->deskripsi = $req->deskripsi;
        $properti->alamat = $req->alamat;
        $properti->luas_tanah = $req->luas_tanah;
        $properti->luas_bangunan = $req->luas_bangunan;
        $properti->kamar_tidur = $req->kamar_tidur;
        $properti->kamar_mandi = $req->kamar_mandi;
        $properti->harga = $req->harga;
        $properti->transaksi = $req->transaksi;
        $properti->foto = $req->foto;
        $properti->proptype_id = $req->proptype;
        $properti->kecamatan_id = $req->kecamatan;
        $properti->agen_id = session()->get("user")->username;
        $properti->save();
        return redirect("/agen/properti");
    }

    public function editPage(Request $req)
    {
        $var["proptype"] = Proptype::all();
        $var["provinsi"] = Provinsi::all();
        $var["properti"] = Properti::where("properti_id", $req->id)->first();
        $kota  = Kecamatan::where("kecamatan_id", $var["properti"]["kecamatan_id"])->first()->kota;
        $var["provinsi_id"] = $kota["provinsi_id"];
        $var["kota_id"] = $kota["kota_id"];

        return view("agen.properti.editProperti", $var);
    }
    public function do_editPage(Request $req)
    {
        $properti = Properti::where("properti_id", $req->id)->first();
        $properti->judul = $req->judul;
        $properti->deskripsi = $req->deskripsi;
        $properti->alamat = $req->alamat;
        $properti->luas_tanah = $req->luas_tanah;
        $properti->luas_bangunan = $req->luas_bangunan;
        $properti->kamar_tidur = $req->kamar_tidur;
        $properti->kamar_mandi = $req->kamar_mandi;
        $properti->harga = $req->harga;
        $properti->transaksi = $req->transaksi;
        $properti->foto = $req->foto;
        $properti->proptype_id = $req->proptype;
        $properti->kecamatan_id = $req->kecamatan;
        $properti->save();
        return redirect("/agen/properti");
    }

    public function deleteProperti(Request $req)
    {
        $properti = Properti::where("properti_id", $req->id)->first();
        $properti->delete();
        return redirect("/agen/properti");
    }
}
