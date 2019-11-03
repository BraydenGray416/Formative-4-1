<?php

function mytheme_customize_register($wp_customize) {



    $wp_customize->add_setting('formative_backgroundColour' , array(
        'default' => '#7fdba0',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control(
        $wp_customize, 'formative_backgroundColourControl', array(
            'label' =>__('Background Colour', '1902FormativeCustom'),
            'description' => 'Change the background colour',
            'section' => 'colors',
            'settings' => 'formative_backgroundColour'
        ) ) );


}

add_action( 'customize_register', 'mytheme_customize_register' );

function mytheme_customize_css(){
    ?>

    <style type="text/css">
    body{
        background-color: <?php echo get_theme_mod('formative_backgroundColour', '#7fdba0') ?>
    }

    <<?php
}

add_action( 'wp_head', 'mytheme_customize_css');
