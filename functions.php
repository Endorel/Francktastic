<?php

function francktastic_setup() {
	load_theme_textdomain( 'francktastic_theme', get_template_directory() . '/languages' );
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );
}

add_action( 'after_setup_theme', 'francktastic_setup' );

function francktastic_resources() {
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_script( 'francktastic-script', get_template_directory_uri() . '/js/main.js');
	wp_enqueue_script( 'francktastic-script2', get_template_directory_uri() . '/js/jquery.js', array(), '1.0.0', true );
}

add_action('wp_enqueue_scripts', 'francktastic_resources');


//Navigering

register_nav_menus(array(

		'primary' => __('Primary menu'),
		'footer' => __('Footer menu')
	));

//Sidebar

function sidebar(){

	register_sidebar(array (
		'name' => "Sidebar",
		'id' => 'sidebar-1',
		'before_widget' => '<div class ="side-widget">',
		'after_widget' => '</div>'
	));
	register_sidebar(array (
		'name' => "Footer 1",
		'id' => 'sidebar-2',
		'before_widget' => '<div class ="widget-item">',
		'after_widget' => '</div>'
	));

	register_sidebar(array (
		'name' => "Footer 2",
		'id' => 'sidebar-3',
		'before_widget' => '<div class ="widget-item">',
		'after_widget' => '</div>'
	));

}

add_action('widgets_init','sidebar');

//Customizer

function my_theme_customize_register( $wp_customize ){

$wp_customize->add_setting('background', ['default' => "#fff", 'transport' => 'refresh']);
$wp_customize->add_section('my_theme_colors', ['title' => "Theme colors", 'priority' => 10]);
$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize, 'background', [
				'label' => "Background",
				'section' => 'my_theme_colors',
				'setting' => 'background'
			])
	);

$wp_customize->add_setting('linkvisited', ['default' => "#fff", 'transport' => 'refresh']);
$wp_customize->add_section('my_theme_colors', ['title' => "Theme colors", 'priority' => 10]);
$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize, 'linkvisited', [
				'label' => "Links visited",
				'section' => 'my_theme_colors',
				'setting' => 'color'
			])
	);

$wp_customize->add_setting('link', ['default' => "#fff", 'transport' => 'refresh']);
$wp_customize->add_section('my_theme_colors', ['title' => "Theme colors", 'priority' => 10]);
$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize, 'link', [
				'label' => "Links",
				'section' => 'my_theme_colors',
				'setting' => 'color'
			])
	);

$wp_customize->add_setting('text-align', ['default' => "left", 'transport' => 'refresh']);
$wp_customize->add_section('my_theme_layout', ['title' => "Layout", 'priority' => 10]);
$wp_customize->add_control(
		new WP_Customize_Control ($wp_customize, 'text-align', [
		'label'    => 'Text align',
		'section'  => 'my_theme_layout',
		'settings' => 'text-align',
		'type'     => 'radio',
		'choices'  => array(
			'left'  => 'left',
			'right' => 'right'
		)
	])
);

$wp_customize->add_setting('font-size', ['default' => "14", 'transport' => 'refresh']);
$wp_customize->add_section('my_theme_layout', ['title' => "Layout", 'priority' => 10]);
$wp_customize->add_control(
		new WP_Customize_Control ($wp_customize, 'font-size', [
		'label'    => 'Font size',
		'section'  => 'my_theme_layout',
		'settings' => 'font-size',
		'type'     => 'radio',
		'choices'  => array(
			'12px'  => '12',
			'14px' => '14',
			'16px' => '16'
		)
	])
);

$wp_customize->add_setting('font-family', ['default' => "Arial, sans-serif", 'transport' => 'refresh']);
$wp_customize->add_section('my_theme_layout', ['title' => "Layout", 'priority' => 10]);
$wp_customize->add_control(
		new WP_Customize_Control ($wp_customize, 'font-family', [
		'label'    => 'Font',
		'section'  => 'my_theme_layout',
		'settings' => 'font-family',
		'type'     => 'radio',
		'choices'  => array(
			'Arial, sans-serif'  => 'Arial',
			'Lucida Sans, sans-serif' => 'Lucida Sans',
			'Georgia, serif' => 'Georgia',
			'Bookman Old Style, serif' => 'Bookman Old Style',
			'Comic Sans MS, sans-serif' => 'Comic Sans MS'
		)
	])
);

}
add_action('customize_register','my_theme_customize_register');


function my_theme_customize_css()
{
    ?>
         <style type="text/css">
             body { background:<?php echo get_theme_mod('background'); ?>;
             		text-align: <?php echo get_theme_mod('text-align'); ?>;
             		font-size: <?php echo get_theme_mod('font-size'); ?>;
             		font-family: <?php echo get_theme_mod('font-family'); ?>; }
             a:visited { color:<?php echo get_theme_mod('linkvisited'); ?>; }
             a:link { color:<?php echo get_theme_mod('link'); ?>; }
         </style>
    <?php
}
add_action( 'wp_head', 'my_theme_customize_css');

