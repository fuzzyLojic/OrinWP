<?php
function teczilla_dark_sections_settings( $wp_customize ) {
    $wp_customize->remove_setting( 'teczilla_menubar_bg_color' );
     $wp_customize->remove_setting( 'teczilla_menu_item_color' );
      $wp_customize->remove_setting( 'teczilla_menu_item_hover_color' );
       $wp_customize->remove_setting( 'teczilla_menu_link_bg_color' );
       $wp_customize->remove_setting( 'teczilla_submnubg_scheme' );
        $wp_customize->remove_setting( 'teczilla_submnu_link' );


        $wp_customize->add_setting('teczilla_theme_color_scheme',array(
        'default' => esc_html__('#d01818','teczilla-dark'),
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    
    $wp_customize->add_control(
        new WP_Customize_Color_Control($wp_customize,'teczilla_theme_color_scheme',array(
            'label' => esc_html__('Theme Color','teczilla-dark'),           
            'description' => esc_html__('Change Theme Color','teczilla-dark'),
            'section' => 'colors',
            'settings' => 'teczilla_theme_color_scheme'
        ))
    ); 

        $wp_customize->add_setting('braedcrumb_height',
            array(
                'default'           => '400',
                'sanitize_callback' => 'teczilla_sanitize_float_theme'
            )
        );
        $wp_customize->add_control('braedcrumb_height',
            array(
                'label'    => __('Breadcrumb Header Height', 'teczilla-dark'),
                'section'  => 'teczilla_breadcrumb_settings',
                'type'     => 'number',
                'input_attrs' => array(
                    'min' => '20', 'step' => '', 'max' => '100',
                  ),
                'priority' => 1,

            )
        );

 


}
add_action( 'customize_register', 'teczilla_dark_sections_settings', 30);