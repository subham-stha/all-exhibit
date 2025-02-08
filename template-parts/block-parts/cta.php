<?php
    if( have_rows('cta_buttons') ): 
    while( have_rows('cta_buttons') ): the_row(); 
    $svgColor = "";
    $buttonType = get_sub_field('button_type');
    if($buttonType == 'pindrop-white'){
        $svgColor = "#9E0059";
    }elseif($buttonType == 'white-border'){
        $svgColor = "#fff";
    }else{
        $svgColor = "#fff";
    }
    
    ?>
    <?php if($buttonType == 'normal'){?>
        <div class="pindrop-btn">
            <a href="<?php the_sub_field('button_link');?>" class="btn-primary btn"><?php the_sub_field('button_text');?></a>
        </div>
    <?php }else{ ?>
        <div class="pindrop-main-btn <?php echo $buttonType;?>">
            <a href="<?php the_sub_field('button_link');?>" class="btn-primary btn"><?php the_sub_field('button_text');?> <svg width="25" height="9" viewBox="0 0 17 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.8052 3.64713C16.805 3.64693 16.8049 3.6467 16.8046 3.6465L13.3348 0.193373C13.0748 -0.0653127 12.6544 -0.06435 12.3956 0.19563C12.1369 0.455577 12.1379 0.876028 12.3978 1.13475L14.7275 3.45312H0.664062C0.297301 3.45312 0 3.75042 0 4.11718C0 4.48394 0.297301 4.78125 0.664062 4.78125H14.7275L12.3979 7.09962C12.1379 7.35834 12.1369 7.77879 12.3957 8.03874C12.6544 8.29875 13.0749 8.29965 13.3348 8.04099L16.8047 4.58787C16.8049 4.58767 16.805 4.58744 16.8053 4.58724C17.0653 4.32766 17.0645 3.90585 16.8052 3.64713Z" fill="<?php echo $svgColor;?>"></path>
            </svg></a>
        </div>
    <?php }?>
    
    
<?php endwhile; endif;?>