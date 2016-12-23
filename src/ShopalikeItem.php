<?php

namespace Lari\Shopalike;

use Illuminate\Database\Eloquent\Model;

class ShopalikeItem extends Model
{
    /**
     * @type string
     */
    protected $table = "shopalike_items";
    /**
     * @type array
     */
    protected $guarded = [];
    /**
     * Item
     * Define a relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function linkable()
    {
        return $this->morphTo();
    }
}
