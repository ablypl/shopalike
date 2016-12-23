<?php

namespace Lari\Shopalike;


abstract class AbstarctShopalikeCategory
{
    const CATEGORIES = [
        ['id' => 1, 'name' => 'Wszystko dla psów'],
        ['id' => 2, 'name' => 'Wszystko dla kotów'],
        ['id' => 3, 'name' => 'Wszystko dla gryzoni'],
        ['id' => 4, 'name' => 'Akwarystyka'],
        ['id' => 5, 'name' => 'Wszystko dla ptaków'],
        ['id' => 6, 'name' => 'Terrarystyka'],
        ['id' => 7, 'name' => 'Karmy dla psów', 'parent' => '1'],
        ['id' => 8, 'name' => 'Ubranka dla psów', 'parent' => '1'],
        ['id' => 9, 'name' => 'Pielęgnacja psa', 'parent' => '1'],
        ['id' => 10, 'name' => 'Smycze dla psów', 'parent' => '1'],
        ['id' => 11, 'name' => 'Obroże dla psów', 'parent' => '1'],
        ['id' => 12, 'name' => 'Budy dla psów', 'parent' => '1'],
        ['id' => 13, 'name' => 'Legowiska dla psów', 'parent' => '1'],
        ['id' => 14, 'name' => 'Miski dla psów', 'parent' => '1'],
        ['id' => 15, 'name' => 'Poidła dla psów', 'parent' => '1'],
        ['id' => 16, 'name' => 'Suche karmy dla psów', 'parent' => '7'],
        ['id' => 17, 'name' => 'Mokre karmy dla psów', 'parent' => '7'],
        ['id' => 18, 'name' => 'Karmy weterynaryjne dla psów', 'parent' => '7'],
    ];
}