<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File_Article extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function article(){
        return $this->hasMany(Article::class , 'article_id' , 'id');
    }
}
