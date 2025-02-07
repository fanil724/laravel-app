<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Post extends Model
{
   protected $fillable = ['title','text','category_id','image','likes'];
    public function category()
   {
       return $this->belongsTo(Category::class);
   }
}
