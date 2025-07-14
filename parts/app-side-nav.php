<?php

$highlighted = $args['highlighted'];

function class_with_current($comparison, $highlighted)
{

    $base = 'sidenav-container__list__item';

    if ($comparison == $highlighted) {
        return $base . ' ' . $base . '--current-item';
    }
    return $base;

}

?>


<div class="sidebar-and-main">

    <div class="sidebar-and-main__sidenav">

        <nav aria-label="Main" class="sidenav-container">
            <ul class="sidenav-container__list">

                <a href="/app/home" class="<?php echo esc_attr(class_with_current('home', $highlighted)); ?>">Home</a>
                <a href="/app/offers"
                    class="<?php echo esc_attr(class_with_current('offers', $highlighted)); ?>">Offers</a>
                <a href="/app/requests"
                    class="<?php echo esc_attr(class_with_current('requests', $highlighted)); ?>">Requests</a>
                <a href="/app/community"
                    class="<?php echo esc_attr(class_with_current('community', $highlighted)); ?>">Community</a>

            </ul>
        </nav>

    </div>

    <main id="main-content">