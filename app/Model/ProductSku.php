<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductSku extends Model
{
    //
    protected $fillable = [
        'product_id','name','img','price','stock','code','data'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function productAttributeAndOption()
    {
        return $this->hasMany(ProductAttributeOption::class);
    }


}
