<?php get_header(); ?>

<div class="search-results">
    <h1>Search Results for: <?php echo get_search_query(); ?></h1>

    <?php if (have_posts()) : ?>
        <ul>
            <?php while (have_posts()) : the_post(); ?>
                <li>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p><?php the_excerpt(); ?></p>
                    <p><?php the_content(); ?></p>
                </li>
            <?php endwhile; ?>
        </ul>
        
        <?php 
        // Pagination
        the_posts_pagination(); 
        ?>
    <?php else : ?>
        <p>No results found for "<?php echo get_search_query(); ?>".</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
