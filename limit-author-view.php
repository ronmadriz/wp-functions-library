<?
/* Only See Own Attachments */

add_action('pre_get_posts','users_attachments');

function users_attachments( $wp_query_obj ) {

global $current_user, $pagenow;

if( !is_a( $current_user, 'WP_User') )
return;

if( 'upload.php' != $pagenow )
return;

if( !current_user_can('delete_pages') )
$wp_query_obj->set('author', $current_user->id );
return;

}