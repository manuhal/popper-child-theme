<?php
/**
 * Template part for displaying ASIDE posts on index pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package popper
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="entry-content content-aside">
        <?php the_content(); ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <div class="index-entry-meta">
            <?php popper_index_posted_on() ?>
        </div>
    </footer><!-- .entry-footer -->


</article><!-- #post-## -->