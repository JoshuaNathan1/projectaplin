<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;
    protected $connection = "mysql";
    protected $table = "kecamatan";
    protected $primaryKey = "kecamatan_id";
    public $incrementing = false;
    public $timestamps = false;

    public function kota()
    {
        return $this->belongsTo(Kota::class, "kota_id", "kota_id");
    }
}
