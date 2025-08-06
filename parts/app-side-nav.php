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

                <a href="/app/home" class="<?php echo esc_attr(class_with_current('home', $highlighted)); ?>">
                    <span class="sidenav-container__list__item__icon">
                        <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'>
                            <title>home_4_fill</title>
                            <g id="home_4_fill" fill='none'>
                                <path
                                    d='M24 0v24H0V0zM12.593 23.258l-.011.002-.071.035-.02.004-.014-.004-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01-.017.428.005.02.01.013.104.074.015.004.012-.004.104-.074.012-.016.004-.017-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113-.013.002-.185.093-.01.01-.003.011.018.43.005.012.008.007.201.093c.012.004.023 0 .029-.008l.004-.014-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014-.034.614c0 .012.007.02.017.024l.015-.002.201-.093.01-.008.004-.011.017-.43-.003-.012-.01-.01z' />
                                <path fill='#000000'
                                    d='M13.2 2.65a2 2 0 0 0-2.4 0l-7 5.25A2 2 0 0 0 3 9.5V19a2 2 0 0 0 2 2h3.9a1.1 1.1 0 0 0 1.1-1.1V15a2 2 0 1 1 4 0v4.9a1.1 1.1 0 0 0 1.1 1.1H19a2 2 0 0 0 2-2V9.5a2 2 0 0 0-.8-1.6z' />
                            </g>
                        </svg>
                    </span>
                    <span class="sidenav-container__list__item__text">
                        Home
                    </span>
                </a>

                <a href="/app/offers" class="<?php echo esc_attr(class_with_current('offers', $highlighted)); ?>">
                    <span class="sidenav-container__list__item__icon">
                        <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'>
                            <title>gift_fill</title>
                            <g id="gift_fill" fill='none' fill-rule='evenodd'>
                                <path
                                    d='M24 0v24H0V0zM12.593 23.258l-.011.002-.071.035-.02.004-.014-.004-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01-.017.428.005.02.01.013.104.074.015.004.012-.004.104-.074.012-.016.004-.017-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113-.013.002-.185.093-.01.01-.003.011.018.43.005.012.008.007.201.093c.012.004.023 0 .029-.008l.004-.014-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014-.034.614c0 .012.007.02.017.024l.015-.002.201-.093.01-.008.004-.011.017-.43-.003-.012-.01-.01z' />
                                <path fill='#000000'
                                    d='M20 13v5a3 3 0 0 1-3 3h-4v-8zm-9 0v8H7a3 3 0 0 1-3-3v-5zM9 2a3.99 3.99 0 0 1 3 1.354A3.99 3.99 0 0 1 15 2h.5A1.5 1.5 0 0 1 17 3.5V4c0 .729-.195 1.412-.535 2H19a2 2 0 0 1 2 2v2c0 .364-.097.706-.268 1H13V8a1 1 0 1 0-2 0v3H3.268A1.99 1.99 0 0 1 3 10V8a2 2 0 0 1 2-2h2.535A3.982 3.982 0 0 1 7 4v-.5A1.5 1.5 0 0 1 8.5 2Zm0 2a2 2 0 0 0 2 2 2 2 0 0 0-2-2m6 0a2 2 0 0 0-2 2 2 2 0 0 0 2-2' />
                            </g>
                        </svg>
                    </span>
                    <span class="sidenav-container__list__item__text">
                        Offers
                    </span>
                </a>


                <a href="/app/requests" class="<?php echo esc_attr(class_with_current('requests', $highlighted)); ?>">
                    <span class="sidenav-container__list__item__icon">
                        <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'>
                            <title>hand_fill</title>
                            <g id="hand_fill" fill='none' fill-rule='evenodd'>
                                <path
                                    d='M24 0v24H0V0zM12.593 23.258l-.011.002-.071.035-.02.004-.014-.004-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01-.017.428.005.02.01.013.104.074.015.004.012-.004.104-.074.012-.016.004-.017-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113-.013.002-.185.093-.01.01-.003.011.018.43.005.012.008.007.201.093c.012.004.023 0 .029-.008l.004-.014-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014-.034.614c0 .012.007.02.017.024l.015-.002.201-.093.01-.008.004-.011.017-.43-.003-.012-.01-.01z' />
                                <path fill='#000000'
                                    d='M10.2 3c0-1.105.696-2 1.8-2 1.105 0 1.8.895 1.8 2l.2 8c0-.364.5-5.66.5-6 0-1 .595-2 1.7-2s1.8.895 1.8 2v7.268c.083-.048.3-3.846.3-4.268 0-1 .263-2 1.2-2 .938 0 1.5.895 1.5 2v6a8 8 0 0 1-8 8h-.674a8 8 0 0 1-7.155-4.422l-2.842-5.684c-.364-.728-.084-1.668.72-2.024.423-.187.897-.292 1.343-.15 1.108.353.944.86 1.608 1.49V5c0-1.105.695-2 1.8-2 1 0 1.609 1.315 1.7 2 .125.938.5 5.634.5 5.998z' />
                            </g>
                        </svg>
                    </span>
                    <span class="sidenav-container__list__item__text">
                        Requests
                    </span>
                </a>


                <a href="/app/community" class="<?php echo esc_attr(class_with_current('community', $highlighted)); ?>">
                    <span class="sidenav-container__list__item__icon">
                        <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'>
                            <title>group_fill</title>
                            <g id="group_fill" fill='none'>
                                <path
                                    d='M24 0v24H0V0zM12.593 23.258l-.011.002-.071.035-.02.004-.014-.004-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01-.017.428.005.02.01.013.104.074.015.004.012-.004.104-.074.012-.016.004-.017-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113-.013.002-.185.093-.01.01-.003.011.018.43.005.012.008.007.201.093c.012.004.023 0 .029-.008l.004-.014-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014-.034.614c0 .012.007.02.017.024l.015-.002.201-.093.01-.008.004-.011.017-.43-.003-.012-.01-.01z' />
                                <path fill='#000000'
                                    d='M13 13a4 4 0 0 1 4 4v1.5a1.5 1.5 0 0 1-1.5 1.5h-12A1.5 1.5 0 0 1 2 18.5V17a4 4 0 0 1 4-4zm6 0a3 3 0 0 1 3 3v1.5a1.5 1.5 0 0 1-1.5 1.5H19v-2a4.992 4.992 0 0 0-2-4zM9.5 3a4.5 4.5 0 1 1 0 9 4.5 4.5 0 0 1 0-9M18 6a3 3 0 1 1 0 6 3 3 0 0 1 0-6' />
                            </g>
                        </svg>
                    </span>
                    <span class="sidenav-container__list__item__text">
                        Community
                    </span>
                </a>

            </ul>
        </nav>

    </div>

    <main id="main-content">