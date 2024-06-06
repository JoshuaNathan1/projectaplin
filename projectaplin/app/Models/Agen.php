<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agen extends Model
{
    use HasFactory;
    protected $connection = "mysql";
    protected $table = "agen";
    protected $primaryKey = "agen_id";
    public $incrementing = true;
    public $timestamps = false;
    public function user(){
        return $this->belongsTo(User::class, "username","username");
    }
}
