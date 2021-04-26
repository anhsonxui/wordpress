<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-thumbnail">
        <?php thachpham_thumbnail('thumbnail'); ?>
    </div>

    <header class="entry-header">
        <?php thachpham_entry_header();  ?>
        <!-- <?php the_author_email() ?> -->

        <?php global $current_user;
        echo $current_user->user_email; ?>

    </header>
    <div class="entry-content">
        <?php thachpham_entry_content(); ?>
        <?php (is_single() ? thachpham_entry_tag() : ''); ?>
    </div>
</article>