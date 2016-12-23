<?php

namespace Lari\Shopalike;

/**
 * @author    Sebastian Szczepański
 * @copyright Ably
 */
class ShopalikeCatalogue
{
    /**
     * @return mixed
     * @throws \Exception
     */
    public function get()
    {
        return cache()->get('shopalike.catalogue.all', function(){
            return ShopalikeItem::all();
        });
    }
}