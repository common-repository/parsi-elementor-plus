<?php
/**
 * Add Font Group PARSI into editor
 */
add_filter( 'elementor/fonts/groups', function( $font_groups ) {
	$font_groups['PARSI'] = __( 'فونت های فارسی پلاس' );
	return $font_groups;
} );
/**
 * Add Group Fonts
 */
add_filter( 'elementor/fonts/additional_fonts', function( $additional_fonts ) {
	// Key/value
	//Font name/font group
	$additional_fonts['Vazir-FN'] = 'PARSI';
	$additional_fonts['Vazir'] = 'PARSI';
	$additional_fonts['Shabnam-FN'] = 'PARSI';
	$additional_fonts['Shabnam'] = 'PARSI';
	return $additional_fonts;
} );