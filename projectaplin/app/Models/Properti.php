<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Properti extends Model
{
    use HasFactory;
    protected $connection = "mysql";
    protected $table = "properti";
    protected $primaryKey = "properti_id";
    public $incrementing = true;
    public $timestamps = false;
    public function tipe()
    {
        return $this->belongsTo(Proptype::class, "proptype_id", "proptype_id");
    }

    // public function 
}
