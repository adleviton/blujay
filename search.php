<?php
/**
 * Displays search entries
 */
?>

<?php get_header(); ?>

<main class="main">

    <?php if ( have_posts() ) : ?>

        <header class="page-header">
            <h1 class="page-title"><?php printf( __( 'Search results for: %s', 'blujay' ), '<span>"' . get_search_query() . '"</span>' ); ?></h1>
        </header>

        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'parts/content', 'excerpt' ); ?>
        <?php endwhile; ?>

        <?php if ($wp_query->max_num_pages > 1) : ?>
            <?php get_template_part( 'parts/pager' ); ?>
        <?php endif; ?>

    <?php else : ?>

        <?php get_template_part( 'parts/content', 'none' ); ?>

    <?php endif; ?>

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
