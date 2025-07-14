<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title>
        <?php
        $title_or_override = get_the_title();

        if (array_key_exists('title_override', $args)) {
            $title_or_override = $args['title_override'];
        }

        if (array_key_exists('in_app', $args) && $args['in_app'] == true) {
            echo _x('Fellow', 'In-app title', 'fellow-theme') . ' | ' . $title_or_override;
        } else {
            echo $title_or_override;
        }
        ?>
    </title>

    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>" type="text/css" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <nav aria-label="Quick links">
        <a href="#main-content" class="hidden-link">
            Skip to main content
        </a>
    </nav>

