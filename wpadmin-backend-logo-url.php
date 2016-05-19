<?

add_filter( 'login_headerurl', 'login_logo_headerurl' );

/**
* Replaces the login header logo URL
*
* @param $url
*/

function login_logo_headerurl( $url ) {
$url = home_url( '/' );
return $url;
}

add_filter( 'login_headertitle', 'login_logo_headertitle' );

/**
* Replaces the login header logo title
*
* @param $title
*/

function login_logo_headertitle( $title ) {
$title = get_bloginfo( 'name' );
return $title;
}