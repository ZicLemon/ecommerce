<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $fillable = [
        'type_id','name','cover','index_block_status','status','sort'
    ];

    public function productType()
    {
        return $this->belongsTo(ProductType::class);
    }

    public function prdocut()
    {
        return $this->hasMany(Product::class);
    }
}
