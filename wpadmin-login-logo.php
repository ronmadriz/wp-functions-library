<?

add_action( 'login_head', 'login_logo' );

/**
* Replaces the login header logo
*/

function login_logo() {

$image_attributes = wp_get_attachment_image_src( 1, 'full' );
echo '<style> .login h1 a { background-image: url( ' . $image_attributes[0] . ' ) !important; }</style>';

}