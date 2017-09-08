<?php
/*
Plugin Name: Adminimizer
Version: 1.1
License: GPL
Description: Hide unwanted items from the WordPress admin menu. 
Author: Landon Dorrier
*/

/*-----------------------------------------------------------------------------------*/
/* Remove Unwanted Admin Menu Items */
/*-----------------------------------------------------------------------------------*/

	function remove_menus(){
	  
	  remove_menu_page( 'edit-comments.php' );          //Comments
	  
	}
	add_action( 'admin_menu', 'remove_menus' );
	
?>
