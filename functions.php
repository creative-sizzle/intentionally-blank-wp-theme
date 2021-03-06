<?php
/**
 * Intentionally Blank Theme functions
 *
 * @package WordPress
 * @subpackage intentionally-blank
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( ! function_exists( 'intentionally_blank_setup' ) ) :
	/**
	 * Sets up theme defaults and registers the various WordPress features that
	 * this theme supports.
	 */
	function intentionally_blank_setup() {
		load_theme_textdomain( 'intentionally-blank' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );

		add_theme_support( 'custom-logo' );
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 256,
				'width'       => 256,
				'flex-height' => true,
				'flex-width'  => true,
				'header-text' => array( 'site-title', 'site-description' ),
			)
		);

		add_theme_support( 'post-thumbnails' );
	}
endif; // end function_exists blank_setup.
add_action( 'after_setup_theme', 'intentionally_blank_setup' );

add_action(
	'customize_register',
	function( $wp_customize ) {
		$wp_customize->remove_section( 'static_front_page' );
	}
);
