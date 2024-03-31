<?php 

//if someone tries to acces the page without proper way then die
if( ! defined('WP_UNINSTALL_PLUGIN') ){
    die();
}

//clear all data from database if plugin is uninstalled

//get all books [custom post type]
$books = get_posts(array('post_type' => 'book', 'numberposts' => -1));

// delete all of the books post by wordpress function
// foreach( $books as $book ){
//     // here 'true' means force delete [delete even the post is in trash or other folder]
//     wp_delete_post($book->ID, true);
// }


//delete all of the post by custom query
//'wpdb' is an object
global $wpdb;
//delete all books post
$wpdb->query("DELETE FROM wp_posts WHERE post_type = 'book' ");

//delete all metadata of 'book' post type
$wpdb->query("DELETE FROM wp_postmeta WHERE id NOT IN (SELECT id FROM wp_posts) ");

//delete all terms data of the 'book' post type
$wpdb->query("DELETE FROM wp_term_relationships WHERE object_id NOT IN(SELECT id FROM wp_posts)");