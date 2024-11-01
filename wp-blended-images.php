<?php 
/**
* Plugin Name: WP Blend Photos
* Plugin URI: http://github.com/zacksac
* Description: This plugin can convert selected portions of image into grayscale and create bleneded effect.
* Version: 1.0.0
* Author: Aman Deep Katoch
* Author URI: 
* License: GPL2
*/

/*  Copyright 2015  Aman deep katoch  (email : zacksac@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    
*/

if ( ! defined( 'ABSPATH' ) ) exit;
define('BLENDED_PLUGIN_URL', plugin_dir_url( __FILE__ ));



add_action( 'admin_menu', 'my_plugin_menu' );


function my_plugin_menu() {
	add_options_page( 'Blended Options', 'Wp Blended Photos', 'manage_options', 'blendedphotos', 'blended_plugin_options' );
}


add_action("wp_ajax_save_pic", "save_pic");
function save_pic(){
	
	$upload_dir       = wp_upload_dir();

	/* escaping base64 post data */
      $data_img=mysql_real_escape_string($_POST['image_64']);
	/*end of escaping base64 data */

// @new
$upload_path      = str_replace( '/', DIRECTORY_SEPARATOR, $upload_dir['path'] ) . DIRECTORY_SEPARATOR;
$data = explode(',', $data_img);
 $decoded          = base64_decode($data[1]) ;

$filename         = '.jpg';

$hashed_filename  = md5( $filename . microtime() ) . '_' . $filename;

// @new
$image_upload     = file_put_contents( $upload_path . $hashed_filename, $decoded );


         $data=$decoded;
        if (!is_dir(dirname(__FILE__) . '/temp_images')){
			mkdir(dirname(__FILE__) . '/temp_images/');
			chmod(dirname(__FILE__) . '/temp_images/', 0777);
		}
		
		/* Save a temp version of the badge based on the base64 supplied... */
		define('UPLOAD_DIR', dirname(__FILE__) . '/temp_images/');
        $file = UPLOAD_DIR . uniqid() . '.png';
		$success = file_put_contents($file, $data);
		//echo '<hr/>Temp image created: ';print_r($success);
		
		/* Create a $_FILES based array... */
		$file_array['tmp_name'] = $file;
		$file_array['name'] = 'blended_image.png'; 
		//echo '<hr/>Files array created: ';print_r($file_array);

		/* Include required files... */
		require_once(ABSPATH . 'wp-admin/includes/file.php');
		require_once(ABSPATH . 'wp-admin/includes/media.php');
		require_once(ABSPATH . 'wp-admin/includes/image.php');
		
		/* Move the file to the uploads directory... */
		$uploadedfile = $file_array;
		$upload_overrides = array('test_form' => false);
		$movefile = wp_handle_sideload($uploadedfile, $upload_overrides);
		
		/* If the move was successful... */
		if ($movefile){
			/* Remove the temp image file... */
			@unlink($file_array['tmp_name']);
			/* Generate image metadata... */
			$wp_filetype = wp_check_filetype(basename($movefile['file']), null);
			$wp_upload_dir = wp_upload_dir();
			$attachment = array(
				'guid' => $wp_upload_dir['url'] . '/' . basename( $movefile['file']), 
				'post_mime_type' => $wp_filetype['type'],
				'post_title' => preg_replace('/\.[^.]+$/', '', basename($movefile['file'])),
				'post_content' => '',
				'post_status' => 'inherit'
			);
			/* Add the image into the media library... */
			$attach_id = wp_insert_attachment($attachment, $movefile['file']);
			$attach_data = wp_generate_attachment_metadata($attach_id, $movefile['file']);
			wp_update_attachment_metadata($attach_id, $attach_data);
			//echo "<hr/>File is valid, and was successfully uploaded.\n";print_r( $movefile);
			
			/* Redirect to media library */
			echo '<script>window.location.replace("'.get_site_url().'/wp-admin/upload.php");</script>';
		}



}

function blended_plugin_options() {

	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	   
	echo '<div class="wrap">';
	require_once dirname( __FILE__ ) . '/image/index.php';
	
	echo '</div>';
}



?>