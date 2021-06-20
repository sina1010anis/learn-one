<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File_Article extends Model
{
    use HasFactory;
    protected $table = 'file__articles';
    protected $guarded = [];
    public function articles(){
        return $this->hasMany(Article::class , 'article_id' , 'id');
    }
}
