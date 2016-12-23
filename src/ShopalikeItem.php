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

    /**
     * @return string
     */
    public function getId()
    {
        if (method_exists($this->linkable, 'getShopalikeId')) {
            return $this->linkable->getShopalikeId();
        }
        return sprintf(
            "%s #%s",
            strtolower(get_class($this->linkable)),
            $this->linkable->id
        );
    }

    public function isOnSale()
    {
        if (method_exists($this->linkable, 'isOnSale')) {
            return $this->linkable->isOnSale();
        }
        
        return false;
    }

    public function hasMethod($name)
    {
        
    }

    // Attributes
    public function getDisplayNameAttribute()
    {
        if (!empty($this->name)) {
            return $this->name;
        }
        if (method_exists($this->linkable, 'getShopalikeName')) {
            return $this->linkable->getShopalikeName();
        }

        return $this->linkable->name;
    }

    public function getBrandAttribute()
    {

    }
    public function getCategoryAttribute()
    {
        
    }

    public function getCurrencyAttribute()
    {

    }

    public function getImageAttribute()
    {
        if(method_exists())
        {

        }
    }

    public function getUrlAttribute()
    {

    }

    public function getCostPerClickAttribute()
    {
        if(method_exists($this->linkable, 'getShopalikeCPC')){
            return $this->linkable->getShopalikeCPC();
        }

        return 0.09;
    }

}
