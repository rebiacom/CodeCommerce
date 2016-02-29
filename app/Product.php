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

    /**
     * @return BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('CodeCommerce\Product');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images()
    {
        return $this->hasMany('CodeCommerce\ProductImage');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany('CodeCommerce\Tag');
    }

    /**
     * @return string
     */
    public function getTagListAttribute()
    {
        $tags = $this->tags->lists('name');

        return implode(',', $tags);
    }

}
