<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'name',
        'description',
        'image_path',
        'price',
        'stock',
        'product_category_id',
    ];

    public function getCategory()
    {
        return $this->belongsTo(Product_category::class, 'product_category_id', 'id');

    }
}
