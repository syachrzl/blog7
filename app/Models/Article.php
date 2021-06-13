<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //Membuat table article
    public $table = 'article';

    //Untuk mendaftarkan nama kolom agar bisa melakukan insert atau update ke database
    protected $fillable = [
        'judul', 'isi_article'
    ];
}
