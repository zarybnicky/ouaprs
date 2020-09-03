<?php
/**
 * The Template for displaying Archive pages.
 */

    get_header();
?>
    <?php if ( have_posts() ) : ?>
        <header class="page-header">
            <h1 class="page-title">
                <?php if ( is_day() ) : ?>
                    Archiv dne: <span><?= get_the_date() ?></span>
                <?php elseif ( is_month() ) : ?>
                    Archiv měsíce: <span><?= get_the_date(_x('F Y', 'monthly archives date format', 'ouaprs-theme')) ?></span>
                <?php elseif ( is_year() ) : ?>
                    Archiv roku: <span><?= get_the_date(_x('Y', 'yearly archives date format', 'ouaprs-theme')) ?></span>
                <?php else : ?>
                    Archiv
                <?php endif; ?>
            </h1>
        </header>

        <?php get_template_part( 'archive', 'loop' ) ?>
    <?php else : ?>
        <?php get_template_part( 'content', 'none' ) ?>
    <?php
        endif;
        wp_reset_postdata(); // end of the loop.
    ?>

<?php get_footer(); ?>
