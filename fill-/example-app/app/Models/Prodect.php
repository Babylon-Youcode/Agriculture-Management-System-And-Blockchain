<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
class Prodect extends Model
{
    use HasFactory;
    // public function category()
    // {
    //    $this->belongsTo(Category::class);
    // }
     protected $fillable = [
        'nom',
        'description',
        'adresse',
        'price',
        'category_id',
        // 'image',
    ];
}
