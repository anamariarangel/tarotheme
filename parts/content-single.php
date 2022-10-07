<article id="post-<?php the_ID();?>" <?php post_class(); ?>>

    <header>
        <?php the_post_thumbnail();?>
        <h1><?php the_title(); ?></h1>
        <div class="meta-info">
        <p><?php esc_html_e( 'Posted in', 'tarotheme' ) ?> <?php echo esc_html(get_the_date()); ?> <?php esc_html_e( 'by', 'tarotheme' ) ?> <?php the_author_posts_link(); ?></p>
            <?php if( has_category()): ?>
                <p><?php esc_html_e( 'Categories', 'tarotheme' ) ?>: <?php the_category( ' ' ); ?></p>
            <?php endif; ?>
            <?php if( has_tag()): ?>
                <p><?php esc_html_e( 'Tags', 'tarotheme' ) ?>: <?php the_tags( '', ', '); ?></p>
            <?php endif; ?>    
        </div>
    </header>
    <div class="content">
        <?php the_content(); ?>
        <?php wp_link_pages(); ?>
    </div>
</article>