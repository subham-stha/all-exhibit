<?php get_header();?>
<main class="site-main">
    <?php
        while(have_posts()): the_post();
            the_content();
        endwhile; //loop ends
    ?>
</main>
<?php get_footer();?>