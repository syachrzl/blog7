<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Negara extends Model
{
    //Membuat table negara
    public $table =  'negara';

    //Mengubah default timestamps menjadi false
    public $timestamps = false;

    //Untuk mendaftarkan nama kolom agar bisa melakukan insert atau update ke database
    protected $fillable = [
        'nama', 'nama_inggris', 'kode_telepon', 'mata_uang'
    ];
}
