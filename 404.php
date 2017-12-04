<?php

get_header(); ?>

<h1>Page Not Found (404 Error)</h1>
<div class="jumbotron">
    <p><?php _e("You've arrived at this page either through an outdated link or a typo on the page you were trying to reach."); ?>
        <a href='<?php echo site_url(); ?>'>Click here to return to the home page.</a></p>
</div>

<?php get_footer(); ?>'