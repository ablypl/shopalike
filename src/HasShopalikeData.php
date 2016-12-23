<?php

namespace Lari\Shopalike;

trait HasShopalikeData
{
    /**
     * @param int  $category
     * @param null $name
     */
    public function associateWithShopalike(int $category, $name = null)
    {
        $name = $name ?? $this->name;
        
        return $this->shopalike()->create([
            'name'        => $name,
            'category_id' => $category
        ]);
    }

    /**
     * @return mixed
     */
    public function shopalike()
    {
        return $this->morphOne(ShopalikeItem::class, 'linkable');
    }
}