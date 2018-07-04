<?php
// Archive Page
// --------------------------

get_header(); ?>
<div class="ounox-container">
    <div class="ounox-inner">

        <?php 
            //Check if there is a post
            if( have_posts() ): 

                //Post loop
                while( have_posts() ): the_post(); 
    
                    // Get the Post Post File
                    ?> 
                    <div class="blog-column">
                        <?php get_template_part( 'post', get_post_format() );?>
                    </div>
        
                <?php endwhile;

                // Previous and Next pagination for blog
                if ( is_home() ) { ?>
                    <div class="blog-pagination">
                        <?php next_posts_link( '<< Older Post' ); ?>
                    </div>
                    <div class="blog-pagination">
                        <?php previous_posts_link( 'Newer Post >>' ); ?>
                    </div>
                <?php } ?>

            <?php endif;
        ?>

    </div>

    <!-- Get Sidebar -->
    <div class="ounox-sidebar">
        <?php get_sidebar(); ?>
    </div>

</div>

<?php get_footer(); ?>