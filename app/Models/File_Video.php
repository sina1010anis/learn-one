<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File_Video extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function videos(){
        return $this->hasMany(Video::class , 'video_id' , 'id');
    }
}
