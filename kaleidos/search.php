<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Kaleidos
 */

get_header(); ?>

    <section id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        <?php if ( have_posts()) : ?>
            <header class="page-header">
                <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'kaleidos' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
            </header><!-- .page-header -->
        <?php endif; ?>

        <?php if ( have_posts() && has_term('es', 'lang') ) : ?>

        <section class="language spanish left">

            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'content', 'search' ); ?>

            <?php endwhile; ?>

        </section>

        <?php elseif ( have_posts() && has_term('en', 'lang') ) : ?>
        <section class="language engllish right">

            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'content', 'search' ); ?>

            <?php endwhile; ?>

        <?php endif; ?>
        </section>

        </main><!-- #main -->
   </section><!-- #primary -->

<?php get_footer(); ?>
