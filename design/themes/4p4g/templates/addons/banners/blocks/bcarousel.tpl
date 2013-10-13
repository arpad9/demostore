{** block-description:bcarousel **}

{if $items}
<div class="carousel slide" id="banner_slider_{$block.snapping_id}">
    <ol class="carousel-indicators">
      {foreach from=$items item="banner" key="key" name="banners"}
          <li data-target="#bannery_slider_{$block.snaping_id}" data-slide-to="{$smarty.foreach.banners.iteration}"></li>
      {/foreach}
    </ol>
    <div class='carousel-inner'>
        {foreach from=$items item="banner" key="key"}
            {if $banner.type == "G" && $banner.main_pair.image_id}
                <div class="item">
                  {include file="common/image.tpl" images=$banner.main_pair}
                </div>
            {/if}
        {/foreach}
    </div>
</div>
{/if}

<script type="text/javascript">
//<![CDATA[
(function(_, $) {
  $('#banner_slider_{$block.snapping_id}').carousel({
      interval: {math equation="s*1000" s=$block.properties.delay|default:0},
  });
}(Tygh, Tygh.$));
//]]>
</script>
