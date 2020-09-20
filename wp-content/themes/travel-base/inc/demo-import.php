<?php
/**
 * Demo Import.
 *
 * This is the template that includes all the other files for core featured of Theme Palace
 *
 * @package Theme Palace
 * @subpackage Travel Base
 * @since Travel Base 1.0.0
 */

function travel_base_intro_text( $default_text ) {
    $default_text .= sprintf( '<p class="about-description">%1$s <a href="%2$s">%3$s</a></p>', esc_html__( 'Demo content files for Travel Base Theme.', 'travel-base' ),
    esc_url( 'https://themepalace.com/instructions/themes/travel-base' ), esc_html__( 'Click here for Demo File download', 'travel-base' ) );

    return $default_text;
}
add_filter( 'pt-ocdi/plugin_intro_text', 'travel_base_intro_text' );