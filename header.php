<!DOCTYPE html>
<head>
<html <?php language_attributes();?>
    <meta charset="<?php bloginfo('charset'); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <? wp_head(); ?>
    </head>
<body <?php body_class(); ?>
<? //wp_body_open();
//obrigatório em temas, juntamente ocm wp_head
?> 
<div id="page" class="site">
    <header>
        <section class="top-bar">
            <div class="container">
                <div class = "logo"> 
                    <?php 
                        if( has_custom_logo() ){
                            the_custom_logo();
                        }else
                        {  ?>
                            <a href="<?php echo esc_html(home_url( '/' )); ?>"><span><?php bloginfo( 'name' ); ?></span></a>
                            <?php
                        }
                        ?>
                    </div>
                    <?php if (! is_page('landing-page')):?>
                <div class = "searchbox">
                    <? esc_html(get_search_form());?>
                </div>
        </section>
        <section class = "menu-area">
            <div class="container">
                <nav class="main-menu">
                    <button class="check-button">
                        <div class="menu-icon">
                            <div class="bar1"></div>
                            <div class="bar2"></div>
                            <div class="bar3"></div>
                        </div>
                    </button>
                    <? wp_nav_menu(array('theme_location' => 'amr_main_menu', 'depth'=> 2)); ?>
                </nav>
                <?php endif;?>
            </div>
        </section>
            
    </header>
</div>
