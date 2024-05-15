<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;
    protected $connection = "mysql";
    protected $table = "provinsi";
    protected $primaryKey = "provinsi_id";
    public $incrementing = false;
    public $timestamps = false;
    public function offices (){
        return $this->hasMany(Office::class, "provinsi_id", "provinsi_id");
    }
}
