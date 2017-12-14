<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <title>MKE Hacker Hours</title>

    <?php wp_head(); ?>

    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

</head>

<body <?php body_class(); ?>>

<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container">
            <a class="navbar-brand p-0" href="<?php echo site_url(); ?>"><img class="rounded"
                                                                              src="<?php echo get_template_directory_uri() . '/img/website_nav.png'; ?>"
                                                                              alt="Milwaukee Hacker Hours"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <?php foreach ([
                                       'How It Works' => 'how-it-works',
                                       'Policies' => 'policies',
                                       'Projects' => 'projects'
                                   ] as $navText => $path) :

                        $active = trim(get_page_uri()) === $path;
                        ?>
                        <li class="nav-item <?php echo $active ? 'active' : '' ?>">
                            <a class="nav-link" href="<?php echo site_url($path); ?>">
                                <?php
                                echo $navText;
                                if ($active) : ?>
                                    <span class="sr-only">(current)</span>
                                <?php endif; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <?php if (!is_user_logged_in()): ?>
                    <hr class="d-md-none">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('/login'); ?>">Login</a>
                        </li>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </nav>
</header>

<main role="main" class="container">

