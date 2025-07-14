<nav aria-label="Main">
    <ul>

        <a href="/app/home">Home</a>
        <a href="/app/offers">Offers</a>
        <a href="/app/requests">Requests</a>
        <a href="/app/community">Community</a>

    </ul>
</nav>

<p><?php echo get_query_var('pagename'); ?></p>
<p><?php echo $args['highlighted']; ?></p>