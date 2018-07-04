<?php
// Content Search
// --------------------------
?>

<!-- Post Title -->

<h3
    ><?php the_title(); ?>
</h3>

<!-- Thumbnail Image -->
<div class="thumbnail-img">
    <?php the_post_thumbnail( 'thumbnail' ); ?>
</div>

<!-- Post Time -->
<small>
    Posted on: <?php the_time( 'F j, Y' ); ?> at <?php the_time( 'g:i a' ); ?>, in <?php the_category(); ?>
</small>

<!-- Post Content -->
<p>
    <?php the_excerpt(); ?>
</p>