<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Category_Blog extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'categories_blogs';
    protected $primaryKey = 'id';
    protected $guarded = [];
}
