<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Category;
use App\Models\Product_image;
class Product extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function images(){
        return $this->hasMany(Product_image::class,'product_id','id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
