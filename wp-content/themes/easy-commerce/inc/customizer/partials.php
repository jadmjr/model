<?php
/**
 * Customizer partials.
 *
 * @package Easy_Commerce
 */

/**
 * Render the site title for the selective refresh partial.
 *
 * @since 1.0.0
 *
 * @return void
 */
function easy_commerce_customize_partial_blogname() {

	bloginfo( 'name' );

}

/**
 * Render the site title for the selective refresh partial.
 *
 * @since 1.0.0
 *
 * @return void
 */
function easy_commerce_customize_partial_blogdescription() {

	bloginfo( 'description' );

}

/**
 * Partial for copyright text.
 *
 * @since 1.0.0
 *
 * @return void
 */
function easy_commerce_render_partial_copyright_text() {

	$copyright_text = easy_commerce_get_option( 'copyright_text' );
	$copyright_text = apply_filters( 'easy_commerce_filter_copyright_text', $copyright_text );

	if ( ! empty( $copyright_text ) ) {
		$copyright_text = wp_kses_data( $copyright_text );
	}

	echo $copyright_text;

}
