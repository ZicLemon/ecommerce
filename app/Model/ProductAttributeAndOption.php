<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductAttributeAndOption extends Model
{
    protected $fillable = [
        'sku_id','attribute_id','option_id','sort'
    ];

    public function productSku()
    {
        return $this->belongsTo(ProductSku::class);
    }

    public function productAttribute()
    {
        return $this->belongsTo(ProductAttribute::class);
    }

    public function productAttributeOption()
    {
        return $this->belongsTo(ProductAttributeOption::class);
    }
}
