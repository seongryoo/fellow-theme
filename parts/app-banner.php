<div class="app-banner">
    <a href="/app/home" class="app-banner__title">Fellow</a>
    <?php
    if (is_user_logged_in()) {
        $logged_in_user = wp_get_current_user();
        ?>

        <div class="app-banner__right">
            <a href="/app/community/@<?php echo esc_html($logged_in_user->user_nicename); ?>">My Profile</a>
            
        </div>

        <?php
    } else {
        ?>

        <div class="app-banner__right">
            <a href="">Login</a>
            
        </div>
        <?php
    }
    ?>
</div>