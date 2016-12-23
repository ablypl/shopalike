<?php

namespace Lari\Shopalike\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Lari\Shopalike\ShopalikeCatalogue;

class ShopalikeXMLController extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {
        return view("shopalike::xml.index")->withItems(
            (new ShopalikeCatalogue())->get()
        );
    }
}
