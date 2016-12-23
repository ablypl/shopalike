<?php

namespace Lari\Shopalike;

trait HasShopalikeData
{
    public function shopalike()
    {
        return $this->morphOne(ShopalikeItem::class, 'linkable');
    }
}