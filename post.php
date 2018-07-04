<?php
// Blog Posts not single page blog
// --------------------------
?>
<!-- Post Title  -->
<a href="<?php the_permalink(); ?>"<h3> <?php the_title(); ?></h3></a>

<!-- Thumbnail Image -->
<div class="thumbnail-img">
    <a href="<?php echo get_permalink(); ?>">
        <?php the_post_thumbnail( 'thumbnail' ); ?>
    </a>
</div>

<!-- Post Time -->
<small>
    Posted on: <?php the_time( 'F j, Y' ); ?> at <?php the_time( 'g:i a' ); ?>, in <?php the_category(); ?>
</small>

<!-- Post Content -->
<p>
    <?php the_content(); ?>
</p>

<!-- Exceprt blog content -->
<a href="<?php echo get_permalink(); ?>"> Read More...</a>