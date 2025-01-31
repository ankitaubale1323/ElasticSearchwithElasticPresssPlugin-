<form role="search" method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
    <input type="search" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s" id="s" />
    <button type="submit" id="searchsubmit">Search</button>
</form>
