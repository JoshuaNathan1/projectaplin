<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;
    protected $connection = "mysql";
    protected $table = "kota";
    protected $primaryKey = "kota_id";
    public $incrementing = false;
    public $timestamps = false;

    public function offices (){
        return $this->hasMany(Office::class, "kota_id", "kota_id");
    }

    public function provinsi(){
        return $this->belongsTo(Provinsi::class, "provinsi_id", "provinsi_id");
    }
}
