<?php
/* Template Name: Blog */
get_header(); 
?>

<div class="container">
    <h1>Our Blog</h1>

    <div class="blog-posts">
        <?php
        // Start the WordPress loop to display posts
        $blog_posts = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 10, 
        ));

        if ($blog_posts->have_posts()) :
            while ($blog_posts->have_posts()) : $blog_posts->the_post();
        ?>
            <article class="post">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p class="post-meta"><?php echo get_the_date(); ?> by <?php the_author(); ?></p>
                <div class="post-excerpt"><?php the_excerpt(); ?></div>
                <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
            </article>
        <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>No blog posts found.</p>';
        endif;
        ?>
    </div>
</div>

<?php get_footer(); ?>
