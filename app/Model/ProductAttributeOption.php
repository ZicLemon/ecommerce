<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use PHPUnit\Framework\Constraint\Attribute;

class ProductAttributeOption extends Model
{
    protected $fillable = [
        'name','attribute_id','sort'
    ];

    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }

    public function productAttributeAndOption()
    {
        return $this->hasMany(ProductAttributeAndOption::class);
    }
}
