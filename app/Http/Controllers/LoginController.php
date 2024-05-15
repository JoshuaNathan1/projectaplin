<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\File;

class LoginController extends Controller
{
    public function loginPage()
    {
        return view("login");
    }

    public function registerPage()
    {
        return view("register");
    }

    public function doLogin(Request $req)
    {
        $req->validate(
            [
                //ini pengecekannya
                "username" => "required",
                'password' => "required"
            ],
            [
                //ini perubahan error messagenya
                "username.required" => "Username harus terisi!",
                "password.required" => "Password harus terisi!"
            ]
        );

        $user = User::where("username", $req->username)->first();
        if ($user == null) {
            return redirect("login")->withErrors(['username' => 'Username not found']);
        } else if ($user->password != $req->password) {
            return redirect("login")->withErrors(['username' => 'Incorrect Password']);
        }

        if($user["role"] == "admin") return redirect('/admin/office');
    }
    public function doRegister(Request $req)
    {
        $req->validate(
            [
                //ini pengecekannya
                "username" => "required|regex:/^\S*$/",
                "full_name" => "required",
                'password' => "required|confirmed",
                "hp"=> "required"
            ],
            [
                //ini perubahan error messagenya
                "username.required" => "Username harus terisi!",
                "username.regex" => "Username tidak boleh mengandung spasi",
                "full_name.required" => "Name harus terisi!",
                "password.confirmed" => "Password dan Confirm Password harus sama!",
                "password.required" => "Password harus terisi!"

            ]
        );
        // var_dump($_FILES["profile_pic"]);
        // var_dump(file_exists("/public/img/profile/"));
        if ($_FILES["profile_pic"]["name"] == "") {
            return redirect("register")->withErrors(['profile_pic' => 'Foto belum dipilih']);
        }

        $ekstensi_diperbolehkan    = array('png', 'jpg', 'jpeg');
        $ekstensi = explode("/", $_FILES["profile_pic"]["type"])[1];

        if (!in_array($ekstensi, $ekstensi_diperbolehkan)) {
            return redirect("register")->withErrors(['profile_pic' => 'Foto harus berformat png/jpg/jpeg']);
        }
        $user = User::where("username", $req->username)->first();
        if ($user != null) {
            return redirect("register")->withErrors(['username' => 'Username sudah dipakai']);
        }

        $file = $req->file('profile_pic');
        $file_name = $req->username . "." . $ekstensi;
        $path = "img/profile/" . $file_name;
        $directory = "img/profile";
        $file->move(public_path($directory),$file_name);


        // if (!move_uploaded_file($file["tmp_name"], 'public/' . $path)) {
        //     return redirect("register")->withErrors(['username' => 'Gagal upload file']);
        // }


        $user = new User();

        $user->username = $req->username;
        $user->full_name = $req->full_name;
        $user->password =  $req->password;
        $user->hp = $req->hp;
        $user->profile_pic = $path;
        $user->role = 'pengguna';

        $user->save();
        return redirect("/login")->with("message", "Anda telah berhasil register");
    }

    public function logout(){
        return redirect("/login");
    }
}
