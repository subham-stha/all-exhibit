<? get_template_part('template-parts/normal-header');?>
<?
if(isset($_GET['authid'])){
    $authID = $_GET['authid'];
    if($authID){
        $authName = pd_author_details($authID);
        $searchFor = $authName['name'];
    }
}else{
    if(isset($_GET['s'])){
        $searchFor =$_GET['s'];
    }
}
?>
<div class="research listing">
    <div class="research-center">
        <div class="container">
            <div class="text">
                <h4>Search results for <span><?= $searchFor;?></span></h4>
            </div>
            <div class="row">
                <?
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; 
                $args = [
                    'order' => 'DESC',
                    'post_status' => 'publish',
                    'paged' => $paged
                ];
                if(isset($_GET['authid'])){
                    $args['post_type'] = 'resource';
                    $args['author__in'] = [$authID];
                }
                else{
                    $args['s'] = $_GET['s'];
                }
                $the_query = new WP_Query( $args);
                
            if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post();
                get_template_part('template-parts/search-loop');
                endwhile; 
            else:
                echo "<p>No results found</p>";
            endif;
                ?>
            </div>
            <?php
            $searchParams = [
                'prev_text' => __('<div class="preious-page"><</div>'),
                'next_text' => __('<div class="next-page">></div>')  
            ];
            if(!empty($the_query)){
                $searchParams['total'] = $the_query->max_num_pages;
            }
            ?>
            <div class="pd-paginate"><? echo paginate_links($searchParams);?></div>
        </div>
    </div>
</div>
<? get_footer();?>