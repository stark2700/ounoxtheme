<?php
// Single Blog Template
// --------------------------

get_header(); ?>

<div class="ounox-container">
    <div class="ounox-inner">

        <?php 
            //Check if there is a post
            if( have_posts() ): 

                //Post loop
                while( have_posts() ): the_post(); ?>

                    <!-- Article Container Starts -->
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        
                        <!-- Single Post Title  -->
                        <h1>
                            <?php the_title() ?>
                        </h1>

                        <!-- Post Time -->
                        <small>
                            Posted on: <?php the_time( 'F j, Y' ); ?> at <?php the_time( 'g:i a' ); ?>, in <?php the_category(); ?> | <?php edit_post_link(); ?>
                        </small>

                        <!-- Thumbnil Image -->
                        <div class="thumbnail-img">
                            <?php the_post_thumbnail( 'thumbnail' ); ?>
                        </div>

                        <!-- Single Post Content -->
                        <p>
                            <?php the_content();?>
                        </p>

                        <hr>

                        <!-- Pagination for single post -->
                        <div class="blog-pagination">
                            <?php previous_post_link(); ?>
                        </div>
                        <div class="blog-pagination">
                            <?php next_post_link(); ?>
                        </div>

                        <!-- Comment Box  -->
                        <?php
                            if( comments_open() ) {
                                comments_template();
                            } else {
                                echo '<h5 class="text-center">Sorry comment is closed</h5>';
                            }
                        ?>
                    </article>

                <?php endwhile; 
            endif;
        ?>

    </div>

    <!-- Sidebar for Single Post  -->
    <div class="ounox-sidebar">
        <?php get_sidebar(); ?>
    </div>

</div>

<?php get_footer(); ?>