<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_article extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function articles(){
        return $this->belongsTo(Article::class , 'article_id' , 'id');
    }
}
