<?php 
global $wpdb;

$sql = $wpdb->prepare( "INSERT INTO $wpdb->postmeta (post_id, meta_key, meta_value ) VALUES ( %d, %s, %d )", 3342, 'post_views', 2290 );
$wpdb->query($sql);
?>