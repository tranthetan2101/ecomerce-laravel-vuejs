<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Product;
class Category extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public function product(){
       return $this->hasMany(Product::class,'category_id','id');
    }
}
