<?php

get_header(); ?>

<?php
// Start the loop.
if (have_posts()) : while (have_posts()) : the_post();
    $title = trim(get_the_title());
    if ($title) : ?>
        <h1><?php echo $title; ?></h1>
    <?php endif; ?>
    <div class="jumbotron">
        <?php the_content(); ?>
    </div>

<?php // End the loop.
endwhile; endif; ?>

<?php get_footer(); ?>
