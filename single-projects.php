<?php

get_header(); ?>

<?php
// Start the loop.
if (have_posts()) : while (have_posts()) : the_post(); ?>

    <h1><?php wp_title(''); ?></h1>
    <div class="jumbotron">
        <?php the_content(); ?>
    </div>

    <div class="jumbotron embed-responsive embed-responsive embed-responsive-4by3">
        <iframe src="<?php the_field('iframe_url'); ?>" class="embed-responsive-item"></iframe>
    </div>

<?php // End the loop.
endwhile; endif; ?>

<?php get_footer(); ?>
