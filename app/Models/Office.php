<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;

    use HasFactory;
    protected $connection = "mysql";
    protected $table = "office";
    protected $primaryKey = "office_id";
    public $incrementing = true;
    public $timestamps = false;

    public function kota(){
        return $this->belongsTo(Kota::class, "kota_id", "kota_id");
    }

    public function user(){
        return $this->belongsTo(User::class, "username","username");
    }

}
