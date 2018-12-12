<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    //
    protected $fillable = [
        'product_id','name','sort'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function productAttributeAndOption()
    {
        return $this->hasMany(ProductAttributeAndOption::class);
    }
}
