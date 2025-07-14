<?php

$member_obj = false;
$member_slug = get_query_var('member');

if ($member_slug != '') {
    $member_obj = get_user_by('slug', $member_slug);
}

$title_override = _x('Member not found.', 'Member not found page title', 'fellow-theme');

if ($member_obj != false) {

    $title_override = $member_obj->display_name;

}
    
get_header(null, array('in_app' => true, 'title_override' => $title_override));


?>

<?php if ($member_obj == false): ?>
    <h1>Looks like this member (<?php echo $member_slug ?>) doesn't exist. :(</h1>

<?php else: ?>
    <h1>Member: <?php echo $member_obj->display_name ?></h1>

<?php endif; 

get_footer();