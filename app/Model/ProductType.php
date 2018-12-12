<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    //
    protected $fillable = [
        'name','cover','index_block_status','status','sort'
    ];

    public function productCategory()
    {
        return $this->hasMany(ProductCategory::class);
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
