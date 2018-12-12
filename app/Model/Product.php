<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name','category_id','type_id','sketch','intro','keywords','tags',
        'price','market_price','stock','warning_stock','picture_url','posters',
        'status','state','sort','deleted_at'
    ];

    public function productCategory()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function productType()
    {
        return $this->belongsTo(ProductType::class);
    }

    public function productAttribute()
    {
        return $this->hasMany(ProductAttribute::class);
    }

    public function productSku()
    {
        return $this->hasMany(ProductSku::class);
    }

}
