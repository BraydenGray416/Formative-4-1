<?php

function mytheme_customize_register($wp_customize) {

    $wp_customize->add_section( 'formative_sidebarLocationSection' , array(
        'title'      => __('Sidebar Location','1902FormativeCustom'),
        'priority'   => 32,
    ) );

    $wp_customize->add_setting('formative_backgroundColour' , array(
        'default' => '#7fdba0',
        'transport' => 'refresh'
    ));

    $wp_customize->add_setting('formative_headerColour', array(
        'default' => '#4BC6B9',
        'transport' => 'refresh'
    ));

    $wp_customize->add_setting('formative_footerColour', array(
        'default' => '#2dc6c6',
        'transport' => 'refresh'
    ));

    $wp_customize->add_setting( 'formative_sidebarLocation' , array(
        'default' => 'left',
        'transport' => 'refresh',
    ) );


    $wp_customize->add_control( new WP_Customize_Color_Control(
        $wp_customize, 'formative_backgroundColourControl', array(
            'label' =>__('Background Colour', '1902FormativeCustom'),
            'description' => 'Change the background colour',
            'section' => 'colors',
            'settings' => 'formative_backgroundColour'
        ) ) );

    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize, 'formative_headerColourControl', array(
            'label' =>__('Header Colour', '1902FormativeCustom'),
            'description' => 'Change the header colour',
            'section' => 'colors',
            'settings' => 'formative_headerColour'
        ) ) );

    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize, 'formative_footerColourControl', array(
            'label' =>__('Footer Colour', '1902FormativeCustom'),
            'description' => 'Change the footer colour',
            'section' => 'colors',
            'settings' => 'formative_footerColour'
        ) ) );

    $wp_customize->add_control(
        new WP_Customize_Control( $wp_customize, 'formative_sidebarLocationControl', array(
            'label'    => __( 'Control Label', '1902FormativeCustom' ),
            'section'  => 'formative_sidebarLocationSection',
            'settings' => 'formative_sidebarLocation',
            'type'     => 'radio',
            'choices'  => array(
                'left'  => 'left',
                'right' => 'right',
            ),
        )
    ) );


            }

            add_action( 'customize_register', 'mytheme_customize_register' );

            function mytheme_customize_css(){
                ?>

                <style type="text/css">
                body{
                    background-color: <?php echo get_theme_mod('formative_backgroundColour', '#7fdba0') ?>
                }
                .header{
                    background-color: <?php echo get_theme_mod('formative_headerColour', '#4BC6B9') ?>
                }
                .footer{
                    background-color: <?php echo get_theme_mod('formative_footerColour', '#2dc6c6') ?>
                }

                <<?php
            }

            add_action( 'wp_head', 'mytheme_customize_css');
