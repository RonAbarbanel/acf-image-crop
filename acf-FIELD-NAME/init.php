<?php
/**
 * Registration logic for the new ACF field type.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'init', 'usm_include_acf_field_imagecropper' );
/**
 * Registers the ACF field type.
 */
function usm_include_acf_field_imagecropper() {
	if ( ! function_exists( 'acf_register_field_type' ) ) {
		return;
	}

	require_once __DIR__ . '/class-usm-acf-field-imagecropper.php';

	acf_register_field_type( 'usm_acf_field_imagecropper' );
}
