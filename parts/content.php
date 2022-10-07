
<article>
<?php if(has_post_thumbnail()): ?>
    <a href="<?php the_permalink();?>"><? the_post_thumbnail(array(275,275));?> </a>
    <?php endif; ?>
    <h2> <a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
       <div class="meta-info">
       <p><?php esc_html_e( 'Posted in', 'tarotheme' ) ?> <?php echo get_the_date(); ?> <?php esc_html_e( 'by', 'tarotheme' ) ?> <?php the_author_posts_link(); ?></p>
        <?php if( has_category()): ?>
            <p><?php esc_html_e( 'Categories', 'tarotheme' ) ?>: <?php the_category( ' ' ); ?></p>
        <?php endif; ?>
        <?php if( has_tag()): ?>
            <p><?php esc_html_e( 'Tags', 'tarotheme' ) ?>: <?php the_tags( '', ', '); ?></p>
        <?php endif; ?>
    </div>
        <?php the_excerpt(); ?>
</article>