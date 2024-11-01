<?php

if ( ! defined( 'ABSPATH' ) ) exit;
 $_POST['image_64'];
$upload_dir       = wp_upload_dir();

// @new
$upload_path      = str_replace( '/', DIRECTORY_SEPARATOR, $upload_dir['path'] ) . DIRECTORY_SEPARATOR;

$decoded          = base64_decode( $_POST['image_64']) ;

$filename         = 'newImage.jpg';

$hashed_filename  = md5( $filename . microtime() ) . '_' . $filename;

// @new
$image_upload     = file_put_contents( $upload_path . $hashed_filename, $decoded );

//HANDLE UPLOADED FILE
if( !function_exists( 'wp_handle_sideload' ) ) {

  require_once( ABSPATH . 'wp-admin/includes/file.php' );

}

// Without that I'm getting a debug error!?
if( !function_exists( 'wp_get_current_user' ) ) {

  require_once( ABSPATH . 'wp-includes/pluggable.php' );

}

// @new
$file             = array();
$file['error']    = '';
$file['tmp_name'] = $upload_path . $hashed_filename;
$file['name']     = $hashed_filename;
$file['type']     = 'image/jpg';
$file['size']     = filesize( $upload_path . $hashed_filename );

// upload file to server
// @new use $file instead of $image_upload
$file_return      = wp_handle_sideload( $file, array( 'test_form' => false ) );
?>
