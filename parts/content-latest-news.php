 <article class="latest-news">
                                        <a href="<?php the_permalink();?>">
                                        <?php the_post_thumbnail( 'large' ); ?>
                                        <h3> <a href="<?php the_permalink();?>"><?php the_title(); ?></h3>
                                        <div class="meta-info">
                                        <?php esc_html_e( 'by', 'tarotheme' ) ?> <span><?php the_author_posts_link(); ?></span> 
        <?php if( has_category()): ?>
            <?php esc_html_e( 'Categories', 'tarotheme' ) ?>: <span><?php the_category( ' ' ); ?></span>
        <?php endif; ?>
        <?php if( has_tag()): ?>
            <?php esc_html_e( 'Tags', 'tarotheme' ) ?>: <?php the_tags( '', ', ' ); ?>
        <?php endif; ?>
                                        <p><span><?php echo esc_html(get_the_date()); ?></p>
                                        </div>
                                        <?php the_excerpt(); ?>
                                    </article>