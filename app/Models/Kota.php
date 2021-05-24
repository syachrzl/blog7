<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    // protected $primaryKey = 'id';
    public $table = 'kota';
    // protected $guarded = [];

    public function negaranya()
    {
        return $this->hasOne(Negara::class, 'id', 'negara_id');
    }
}
