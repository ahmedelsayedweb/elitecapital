<div class="listing__item">
    <article id="post-<?php the_ID(); ?>" <?php post_class('article__item'); ?>>
        <?php Cf47rs_Fallback::post_header(); ?>
        <div class="article__intro">
            <?php
            /* translators: %s: Name of current post */
            the_content('Read more');

            ?>

            <div class="pagination">
                <div class="nav-links"><?php wp_link_pages(); ?></div>
            </div>
        </div>
    </article>
</div>