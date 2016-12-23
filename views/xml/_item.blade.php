<item>
    <itemId><![CDATA[{{ $item->getId() }}]]></itemId>
    <name><![CDATA[{{ $item->displayName }}]]></name>
    {{--<topCategory><![CDATA[{{  $item->category->get('path')->get(0) }}]]></topCategory>--}}
    {{--<category><![CDATA[{{ $item->category->get('path')->get(1)}}]]></category>--}}
    {{--<category2><![CDATA[{{ $item->get('path')->get(2)}}]]></category2>--}}
    <brand><![CDATA[{{  $item->brand }}]]></brand>
    <description><![CDATA[{{ $item->description }}]]></description>
    <price><![CDATA[{{ $item->price }}]]></price>
    @if($item->isOnSale())
        <oldPrice><![CDATA[{{ $item->oldPrice }}]]></oldPrice>
    @endif
    <currency><![CDATA[{{ $item->currency }}]]></currency>
    <deliveryTime><![CDATA[{{ $item->deliveryTime }}]]></deliveryTime>
    <image><![CDATA[{{ asset($item->image)}}]]></image>
    <deepLink><![CDATA[{{ $item->url }}]]></deepLink>
    <cpc><![CDATA[{{ $item->costPerClick }}]]></cpc>
</item>
