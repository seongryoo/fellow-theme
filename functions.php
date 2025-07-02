<?php


function fellow_app_query_vars($qvars): array
{
    $qvars[] = 'member';
    return $qvars;
}

add_filter('query_vars', 'fellow_app_query_vars');

add_action('init', 'add_author_rules');
function add_author_rules()
{
    add_rewrite_rule(
        'app/member/([^/]+)/?$',
        'index.php?pagename=member-profile&member=$matches[1]',
        'top'
    );

}

?>