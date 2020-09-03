<?php
/**
 * The default template for displaying content
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php if ( is_sticky() ) : ?>
            <hgroup>
                <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="Permalink na <?= esc_attr(the_title_attribute('echo=0')) ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                <h3 class="entry-format">Připnuto</h3>
            </hgroup>
        <?php else : ?>
            <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="Permalink na <?= esc_attr(the_title_attribute('echo=0')) ?>" rel="bookmark"><?php the_title(); ?></a></h2>
        <?php endif; ?>
        
        <?php if ( 'post' == get_post_type() ) : ?>
            <div class="entry-meta">
                <?php themes_starter_article_posted_on(); ?>
            </div><!-- /.entry-meta -->
        <?php endif; ?>
    </header><!-- /.entry-header -->
    
    <?php if ( is_search() ) : // Only display Excerpts for Search ?>
        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div><!-- /.entry-summary -->
    <?php else : ?>
        <div class="entry-content">
            <?php the_content('Zobrazit více <span class="meta-nav">&rarr;</span>') ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>Stránky:</span>', 'after' => '</div>' ) ); ?>
        </div><!-- /.entry-content -->
    <?php endif; ?>
        
    <footer class="entry-meta">
        <?php
            $show_sep = false;
            if ( 'post' === get_post_type() ) : // Hide category and tag text for pages on Search

                /* translators: used between list items, there is a space after the comma */
                $categories_list = get_the_category_list(', ');
                if ( $categories_list ) :
            ?>
                    <span class="cat-links">
                        <span class="entry-utility-prep entry-utility-prep-cat-links">Kategorie </span><?= $categories_list ?>
                    </span>
            <?php
                endif; // End if $categories_list
            endif; // End if 'post' == get_post_type()
        ?>

        <a href="<?php echo get_the_permalink(); ?>" class="btn btn-secondary">více</a>
        
        <?php edit_post_link('Upravit', '<span class="edit-link">', '</span>' ); ?>
    </footer><!-- /.entry-meta -->
</article><!-- /#post-<?php the_ID(); ?> -->
