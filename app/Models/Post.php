<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    protected $fillable = ['title','description','slug','category_id','featured'];
    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
