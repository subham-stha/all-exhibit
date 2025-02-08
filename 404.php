<?php get_header();?>
<main class="site-main">
    <div class="pindrop-banner error-banner" style="background: url(<?php echo get_template_directory_uri();?>/assets/img/error-banner.png)  no-repeat center center / cover; ">
            <div class="dots-svg"><img src="<?php echo get_template_directory_uri();?>/assets/img/404/dots.png" alt="404 page not found"></div>
            <div class="container">
                <div class="error--copy">
                    <h3>Hmm... This location seems to be out of reach</h3>
                    <p>We couldn’t find the page you requested, but there’s plenty more to explore.</p>
                    <div class="pindrop-main-btn pindrop-btn">
                        <a href="<? echo home_url();?>/research/" class="btn-primary btn"> Explore research + insights</a>
                    </div>
                </div>
            </div>
    </div>
    <div class="partner-logo" style="padding:100px 0;">
        <div class="container">
            <div class="partner-text">
                <h4>As <span>seen</span> on</h4>
                <div class="logo-flex">
                <li><img src="<?php echo get_template_directory_uri();?>/assets/img/404/nyt.svg" alt=""></li>
                <li><img src="<?php echo get_template_directory_uri();?>/assets/img/404/WSJ.svg" alt=""></li>
                <li><img src="<?php echo get_template_directory_uri();?>/assets/img/404/CNN.svg" alt=""></li>
                <li><img src="<?php echo get_template_directory_uri();?>/assets/img/404/politico.svg" alt=""></li>
                <li><img src="<?php echo get_template_directory_uri();?>/assets/img/404/bloomberg.svg" alt=""></li>                  
                </div>
            </div>
        </div>
    </div>

    
</main>

<?php get_footer();?>