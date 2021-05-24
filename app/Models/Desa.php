<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    // protected $primaryKey = 'id';
    public $table = 'desa';
    // protected $guarded = [];

    public function kotanya()
    {
        return $this->hasOne(Kota::class, 'id', 'id_kota');
    }
}
