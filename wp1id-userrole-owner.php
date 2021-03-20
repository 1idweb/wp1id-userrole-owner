<?php
/**
 * Plugin Name: User Role Owner
 * Plugin URI: https://1idweb.com/products/wordpress-plugin/wp1id-userrole-owner
 * Description: Adds an `Owner` user role.
 * Version: 1.0
 * Author: 1idweb
 * Author URI: https://1idweb.com
 * License: GPL2
 */


/**
 * Same capabilities as an `editor` plus the ability to manage users.
 * list of capabilities : `wordpress.org/support/article/roles-and-capabilities`
 */
add_role(
	'Owner',
	__( 'Owner', 'wp1id userrole owner' ),
	array(
        // Editor’s capabilities
        'delete_others_pages'   => true,
        'delete_others_posts'   => true,
        'delete_pages'          => true,
        'delete_posts'          => true,
        'delete_private_pages'  => true,
        'delete_private_posts'  => true,
        'delete_published_pages'  => true,
        'delete_published_posts'  => true,
        'edit_others_pages'     => true,
        'edit_others_posts'     => true,
        'edit_pages'            => true,
        'edit_posts'            => true,
        'edit_private_pages'    => true,
        'edit_private_posts'    => true,
        'edit_published_pages'  => true,
        'edit_published_posts'  => true,
        'manage_categories'     => true,
        'manage_links'          => true,
        'moderate_comments'     => true,
        'publish_pages'         => true,
        'publish_posts'         => true,
        'read'                  => true,
        'read_private_pages'    => true,
        'read_private_posts'    => true,
        'unfiltered_html'       => true,
        'upload_files'          => true,
        // Added users capabilities for owners
        'list_users'            => true,
        'promote_users'         => true,
        'remove_users'          => true
	)
);