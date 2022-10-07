<?php get_header(); ?>

<img src="<?php header_image(); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>
                                " width="<?php echo esc_attr( get_custom_header()->width ); ?>" alt="" />

        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <?php the_archive_title( '<h1 class="archive-title">', '</h1>' ); ?>
                    <?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
                    <div class="container">
                        <div class="archive-items">
                            <?php 
                                if( have_posts() ):
                                    while( have_posts() ) : the_post();
                                    esc_html(get_template_part('parts/content'));
                                    endwhile;
                                    ?>
                                        < <div class="amr-pagination">
                                            <div class="pages new">
                                            <?php previous_posts_link( esc_html__( "<< Newer posts", 'tarotheme' ) ); ?>
                                            </div>
                                            <div class="pages old">
                                                <?php next_posts_link( esc_html__( "Older posts >>", 'tarotheme' ) ); ?>                       
                                                </div>
                                        </div>
                                    <?php
                                else: ?>
                                    <p><?php esc_html_e( 'Nothing yet to be displayed!', 'tarotheme' ) ?></p>
                            <?php endif; ?>                                
                        </div>
                        <div>
                        <?php esc_html(get_sidebar()); ?>
                        </div>
                       </div>
                </main>
            </div>
        </div>
<?php get_footer(); ?>