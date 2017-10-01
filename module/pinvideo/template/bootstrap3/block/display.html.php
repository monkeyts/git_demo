{if count($aPins)}
<div id="mac-bootpin" class="mac-bootpin-single dont-unbind mac-bootpin-video">
{foreach from=$aPins name=pin item=aPin}
    {if false && Phpfox::isModule('pinad') && $phpfox.iteration.pin == $iRandomForAd}
      {module name='pinad.display'}
    {/if}
    <div class="mac-element mac-browsing-{$aPin.ITEMTYPENAME} mac-box {if true} col-xs-6 col-sm-4 col-md-3 col-lg-3{/if}">
      <div class="box-type-{$aPin.ITEMTYPENAME} box" data-category="{$aPin.ITEMTYPENAME}" id="mac_pin_element_{$aPin.feed_id}">
        {template file='pinvideo.block.pin-video'}
      </div>
    </div>
{/foreach}
</div>
<div class="clear"></div>
<nav id="page_nav"><a href="{$sAjaxFilterUrl}"></a></nav>
{unset var=$aPins var=$aPin}
{else}
<div class="alert alert-info mac-mrg-tp">{phrase var='pin.no_post_found'}</div>
{/if}