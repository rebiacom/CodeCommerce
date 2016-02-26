<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $fillable = array(
        'name',
        'description',
        'price',
        'featured',
        'recommended'
    );

    public function category()
    {
        return $this->belongsTo('CodeCommerce\Product');
    }

    public function images()
    {
        return $this->hasMany('CodeCommerce\ProductImage');
    }

    public function tags ()
    {
        return $this->belongsToMany('CodeCommerce\Tag');
    }

}
