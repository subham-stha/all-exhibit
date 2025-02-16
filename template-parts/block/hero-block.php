<?php /* Hero Block */ ?>
<? if(get_field('hero_copy')):?>
<div class="banner <?= pathinfo(__FILE__, PATHINFO_FILENAME);?>">
      <div class="container">
        <? the_field('hero_copy');?>
      </div>
    </div>
<? endif;?>
<!-- banner ends -->