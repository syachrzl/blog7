<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Negara extends Model
{
    public $table =  'negara';
    public $timestamps = false;
    protected $fillable = [
        'nama', 'nama_inggris', 'kode_telepon', 'mata_uang'
    ];
}
