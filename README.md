# Adminimizer
This is a WordPress plugin to declutter the admin dashboard by removing unwanted menu items. 

The current adminimizer.php file hosted here is only set to remove Comments from the WordPress dashboard. 

## Instructions
1. Put `adminimizer.php` in your theme's `plugins` folder. 
2. Activate the plugin from the WP dashboard.

## Options
Several of the menu items can be removed from the dashboard by adding the right function within `remove_menus()` in adminimizer.php

1. Comments - `remove_menu_page( 'edit-comments.php' );`
2. Posts - `remove_menu_page( 'edit.php' );`
3. asdf
