<?php
// Search Page
// --------------------------

get_header(); ?>

<div class="ounox-inner">

    <?php 
    
        //Check if there is a post
        if( have_posts() ): 

            //Post loop
            while( have_posts() ): the_post(); ?>

                    <p><?php get_template_part( 'content', 'search' ); ?></p>
    
           <?php endwhile; 


        endif;
    ?>
</div>

<?php get_footer(); ?>