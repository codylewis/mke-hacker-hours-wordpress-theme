<?php

get_header(); ?>

<?php
// Start the loop.
if (have_posts()) : while (have_posts()) : the_post(); ?>

    <h1><?php wp_title(''); ?></h1>
    <div class="jumbotron">
        <?php the_content(); ?>
    </div>
<?php // End the loop.
endwhile; endif; ?>

<?php

$the_query = new WP_Query([
    'post_type' => 'projects',
]);

if (have_posts()) : ?>
    <div class="row">
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="col-md-6 col-lg-4 project-preview">
                    <div class="jumbotron">
                        <h2 class="h3 give-me-ellipsis"><?php the_title(); ?></h2>
                        <p class="card-text give-me-ellipsis"><?php echo get_the_content(); ?></p>
                        <div class="text-right">
                            <a href="<?php the_permalink(); ?>" class="text-muted"></i> See More</a>
                        </div>
                    </div>
            </div>
        <?php endwhile; ?>
    </div>
<?php else: ?>

    <div class="jumbotron">

    </div>

<?php endif; ?>


<?php get_footer(); ?>
