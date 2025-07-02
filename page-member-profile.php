<?php

$member_obj = false;
$member_slug = get_query_var('member');

if ($member_slug != '') {
    $member_obj = get_user_by('slug', $member_slug);
}

?>

<?php if ($member_obj == false): ?>
    <h1>Looks like this member (<?php echo $member_slug ?>) doesn't exist. :(</h1>

<?php else:
    $member_name = $member_obj->display_name;
    ?>
    <h1>Member: <?php echo $member_name ?></h1>

<?php endif; ?>