<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'category_id',
        'price',
        'count',
        'description'
    ];
    /**
     * Get the category that owns the product.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);//('App\Category', 'foreign_key');
    }
    public function productImages()
    {
        return $this->hasMany(ProductImage::class);//('App\Product');// Product::class);
    }
}
