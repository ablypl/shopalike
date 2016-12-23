<?php
namespace Lari\Shopalike;

use Illuminate\Support\Collection;

class ShopAlikeCategory extends AbstarctShopalikeCategory
{
    /**
     * @type Collection
     */
    private $categories;

    public function __construct()
    {
        $this->collect();
    }

    /**
     * @param null $id
     * @return Collection
     */
    public function get($id = null)
    {
        if (is_null($id)) {
            return collect();
        }
        return $this->categories->where('id', "==", $id)->first();
    }

    /**
     * @return Collection
     */
    public function all()
    {
        return $this->categories;
    }

    /**
     * @param $method
     * @param $params
     * @return mixed
     */
    public function __call($method, $params)
    {
        if (!method_exists($this, $method)) {
            return $this->categories->{$method}($params);
        }
    }

    /**
     * Data transformer
     */
    public function collect()
    {
        $this->categories = collect(self::CATEGORIES)->map(function ($category) {
            return collect($category);
        });
        $this->categories->map(function ($category) {
            $breadcrumbs = collect();
            $breadcrumbs->push($category->get('name'));
            $breadcrumbs = $this->getParent($category, $breadcrumbs);
            $category->put('path', $breadcrumbs->reverse());
            
            return $category;
        });
    }

    /**
     * @param Collection $category
     * @param Collection $path
     * @return Collection
     */
    public function getParent(Collection $category, Collection $path)
    {
        if ($category->get('parent')) {
            $parent = $this->get((int)$category->get('parent'));
            $path->push($parent->get('name'));
            $path = $this->getParent($parent, $path);
        }

        return $path;
    }

}