<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public $table = 'article';
    protected $fillable = [
        'judul', 'isi_article'
    ];
}
