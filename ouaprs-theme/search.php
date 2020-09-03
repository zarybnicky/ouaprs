<?php
/**
 * The Template for displaying Search Results pages.
 */

    get_header();
?>
    <?php if ( have_posts() ) : ?>
        <header class="page-header">
            <h1 class="page-title">Výsledky vyhledávání pro <span><?= get_search_query() ?></span></h1>
        </header>
        <?php get_template_part( 'archive', 'loop' ) ?>
    <?php else : ?>
        <article id="post-0" class="post no-results not-found">
            <header class="entry-header">
                <h1 class="entry-title">Nic nenalezeno</h1>
            </header><!-- .entry-header -->
            <p>Omlouváme se, ale žádný obsah neodpovídá kritériím vašeho vyhledávání. Zkuste použít jiná klíčová slova</p>
            <?php get_search_form(); ?>
        </article><!-- /#post-0 -->
    <?php
        endif;
        wp_reset_postdata(); // end of the loop.
    ?>
<?php get_footer(); ?>
