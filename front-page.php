<?php

get_header(); ?>

<?php
// Start the loop.
if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="jumbotron">
        <img src="<?php echo get_template_directory_uri() . '/img/website_front_page.jpg'; ?>"
             alt="Milwaukee Hacker Hours logo" class="img-fluid rounded ml-auto mr-auto d-block mb-5">
        <h1 class="text-center display-4 display-5 mb-5"><?php echo get_the_content(); ?></h1>
        <div class="row">
            <div class="ml-auto col-sm-6 col-lg-3 text-center text-sm-right">
                <a href="<?php the_field('twitter_widget_url'); ?>" class="twitter-follow-button"
                   data-show-count="false"
                   data-size="large">Follow @MKEHackerHours</a>
            </div>
            <div class="mr-auto col-sm-6 col-lg-3 text-center text-sm-left mt-3 mt-sm-0">
                <a href="<?php the_field('slack_invite_link'); ?>" class="d-inline-flex">
                    <img src="<?php echo get_template_directory_uri() . '/img/slack_rgb.png'; ?>" alt="">
                </a>
            </div>

        </div>

    </div>

<?php // End the loop.
endwhile; endif; ?>

<?php get_footer(); ?>
