<?php


function fellow_app_query_vars($qvars): array
{
    $qvars[] = 'member';
    return $qvars;
}

add_filter('query_vars', 'fellow_app_query_vars');

add_action('init', 'fellow_app_init');

function fellow_app_init() {
    fellow_app_add_author_rules();
}
function fellow_app_add_author_rules()
{
    add_rewrite_rule(
        'app/community/@([^/]+)/?$',
        'index.php?pagename=member-profile&member=$matches[1]',
        'top'
    );

    add_rewrite_rule(
        'app/home',
        'index.php?pagename=app-home',
        'top'
    );

    add_rewrite_rule(
        'app/offers',
        'index.php?pagename=app-offers',
        'top'
    );

    
    add_rewrite_rule(
        'app/requests',
        'index.php?pagename=app-requests',
        'top'
    );

    
    add_rewrite_rule(
        'app/community',
        'index.php?pagename=app-community',
        'top'
    );

}

?>