<?php
// Index Page
// --------------------------

get_header(); ?>
<div class="ounox-container">
    <div class="ounox-inner">

        <?php 
            //Check if there is a post
            if( have_posts() ): 

                //Post loop
                while( have_posts() ): the_post(); 

                    if ( is_front_page() && is_home() ) { ?>

                        <?php
                        // Default Homepage
                        // Post Content
                        ?>
                        <p><?php the_content(); ?></p>

                    <?php } elseif ( is_front_page()){ ?>

                        <?php
                        // Static homepage
                        // Post Content
                        ?>
                        <p><?php the_content(); ?></p>

                    <?php } elseif ( is_home()){ ?>

                        <?php
                        // Blog page 
                        // Get the Post Post File
                        ?>
                        <div class="blog-column">
                            <?php get_template_part( 'post', get_post_format() );?>
                        </div>
                    <?php } else { ?>

                        <?php
                        // Everything else
                        // Post Content
                        ?>
                        <p><?php the_content(); ?></p><?php
                    }
        
                endwhile; ?>

                <?php
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

    
    <?php
    // Get Sidebar
    if ( is_home() ) { ?>
        <div class="ounox-sidebar">
            <?php get_sidebar(); ?>
        </div>
    <?php } ?>

</div>

<?php get_footer(); ?>