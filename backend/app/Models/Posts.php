<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Posts extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public function categoryBlog(){
        return $this->belongsTo(Category_Blog::class,'category_id','id');
    }
    public function auth(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
