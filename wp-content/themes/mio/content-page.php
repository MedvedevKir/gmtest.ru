<article id="post-<?php the_ID(); ?>" <?php post_class('group'); ?>>

    <?php 
      if (!is_page('beginner') && !is_page('skilled')) {
        require_once('wp-content/themes/mio/custom_header2.php');
      }
    ?>
    <div class="entry-content">
        <?php the_content(); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'sp' ), 'after' => '</div>' ) ); ?>
        <footer class="entry-meta">
            <?php edit_post_link( __( 'Edit', 'sp' ), '<span class="edit-link">', '</span>' ); ?>
        </footer><!-- .entry-meta -->
    </div><!-- .entry-content -->
</article><!-- #post-## -->

