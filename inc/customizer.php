<?php
function amr_customizer( $wp_customize ){
    // 1 Copyright Section
    $wp_customize->add_section(
        'sec_copyright',
        array(
            'title' => __( 'Copyright Settings', 'tarotheme' ),
            'description' => __( 'Copyright Settings', 'tarotheme' )
        )
    );

            $wp_customize->add_setting(
                'set_copyright',
                array(
                    'type' => 'theme_mod',
                    'default' => __( 'Copyright X - All Rights Reserved', 'tarotheme' ),
                    'sanitize_callback' => 'sanitize_text_field'
                )
            );

            $wp_customize->add_control(
                'set_copyright',
                array(
                    'label' => __( 'Copyright Information', 'tarotheme' ),
                    'description' => __( 'Please, type your copyright here', 'tarotheme' ),

                    'section' => 'sec_copyright',
                    'type' => 'text'
                )
            ); 

            //2 - Hero
                 $wp_customize->add_section(
                'sec_hero',
                array(
                    'title' => __( 'Hero Section', 'tarotheme' )
                )
            );
        
                    // Title
                    $wp_customize->add_setting(
                        'set_hero_title',
                        array(
                            'type' => 'theme_mod',
                            'default' => __( 'Please, add some title', 'tarotheme' ),
                            'sanitize_callback' => 'sanitize_text_field'
                        )
                    );
        
                    $wp_customize->add_control(
                        'set_hero_title',
                        array(
                            'label' => __( 'Hero Title', 'tarotheme' ),
                            'description' => __( 'Please, type your here title here', 'tarotheme' ),
                            'section' => 'sec_hero',
                            'type' => 'text'
                        )
                    );  
                    
                    // Subtitle
                    $wp_customize->add_setting(
                        'set_hero_subtitle',
                        array(
                            'type' => 'theme_mod',
                            'default' => __( 'Please, add some subtitle', 'tarotheme' ),
                            'section' => 'sec_hero',
                            'type' => 'text'
                        )
                        );
                            //subtitle
                                          
                                $wp_customize->add_setting(
                                    'set_hero_subtitle',
                                    array(
                                        'type' => 'theme_mod',
                                        'default' => 'Please, add some subtitle',
                                        'sanitize_callback' => 'sanitize_textarea_field'
                                    )
                                );
                    
                                $wp_customize->add_control(
                                    'set_hero_subtitle',
                                    array(
                                        'label' => __( 'Hero Subtitle', 'tarotheme' ),
                                        'description' => __( 'Please, type your subtitle here', 'tarotheme' ),
                                        'section' => 'sec_hero',
                                        'type' => 'textarea'
                                    )
                                );
                    
                                // Button Text
                                $wp_customize->add_setting(
                                    'set_hero_button_text',
                                    array(
                                        'type' => 'theme_mod',
                                        'default' => __( 'Learn More', 'tarotheme' ),
                                        'sanitize_callback' => 'sanitize_text_field'
                                    )
                                );
                    
                                $wp_customize->add_control(
                                    'set_hero_button_text',
                                    array(
                                        'label' => __( 'Hero button text', 'tarotheme' ),
                                        'description' => __( 'Please, type your hero button text here', 'tarotheme' ),
                                        'section' => 'sec_hero',
                                        'type' => 'text'
                                    )
                                    );

                                //buttonlink
                                          
                                $wp_customize->add_setting(
                                    'set_hero_button_link',
                                    array(
                                        'type' => 'theme_mod',
                                        'default' => '#',
                                        'sanitize_callback' => 'esc_url_raw'
                                    )
                                );
                      
                                $wp_customize->add_control(
                                    'set_hero_button_link',
                                    array(
                                        'label' => __( 'Hero button link', 'tarotheme' ),
                                        'description' => __( 'Please, type your hero button link here', 'tarotheme' ),
                                        'section' => 'sec_hero',
                                        'type' => 'url'
                                    )
                                ); 
                                
                                // Hero Height
                                $wp_customize->add_setting(
                                    'set_hero_height',
                                    array(
                                        'type' => 'theme_mod',
                                        'default' => 800,
                                        'sanitize_callback' => 'absint'
                                    )
                                );
                      
                                $wp_customize->add_control(
                                    'set_hero_height',
                                    array(
                                        'label' => __( 'Hero height', 'tarotheme' ),
                                        'description' => __( 'Please, type your hero height', 'tarotheme' ),
                                        'section' => 'sec_hero',
                                        'type' => 'number'
                                    )
                                );
                      
                                // Hero Background
                              $wp_customize->add_setting(
                                  'set_hero_background',
                                  array(
                                      'type' => 'theme_mod',
                                      'sanitize_callback' => 'absint'
                                  )
                              );
                      
                              $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize,
                                  'set_hero_background',
                                  array(
                                      'label' => __( 'Hero Image', 'tarotheme' ),
                                      'section'   => 'sec_hero',
                                      'mime_type' => 'image'
                                  )));
                      
                      // 3. Blog
                      $wp_customize->add_section( 
                          'sec_blog', 
                          array(
                              'title' => __( 'Blog Section', 'tarotheme' )
                      ) );
                      
                              // Posts per page
                              $wp_customize->add_setting( 
                                  'set_per_page', 
                                  array(
                                      'type' => 'theme_mod',
                                      'sanitize_callback' => 'absint'
                              ) );
                      
                              $wp_customize->add_control( 
                                  'set_per_page', 
                                  array(
                                      'label' => __( 'Posts per page', 'tarotheme' ),
                                      'description' => __( 'How many items to display in the post list?', 'tarotheme' ),			
                                      'section' => 'sec_blog',
                                      'type' => 'number'
                              ) );
                      
                              // Post categories to include
                              $wp_customize->add_setting( 
                                  'set_category_include', 
                                  array(
                                      'type' => 'theme_mod',
                                      'sanitize_callback' => 'sanitize_text_field'
                              ) );
                      
                              $wp_customize->add_control( 
                                  'set_category_include', 
                                  array(
                                      'label' => __( 'Post categories to include', 'tarotheme' ),
                                      'description' => __( 'Comma separated values or single category ID', 'tarotheme' ),
                                      'section' => 'sec_blog',
                                      'type' => 'text'
                              ) );	
                      
                              // Post categories to exclude
                              $wp_customize->add_setting( 
                                  'set_category_exclude', 
                                  array(
                                      'type' => 'theme_mod',
                                      'sanitize_callback' => 'sanitize_text_field'
                              ) );
                      
                              $wp_customize->add_control( 
                                  'set_category_exclude', 
                                  array(
                                      'label' => __( 'Post categories to exclude', 'tarotheme' ),
                                      'description' => __( 'Comma separated values or single category ID', 'tarotheme' ),			
                'section' => 'sec_blog',
                'type' => 'text'
        ) );            
}
add_action( 'customize_register', 'amr_customizer' );