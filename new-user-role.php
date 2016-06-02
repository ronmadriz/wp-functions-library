<?php 

    // add a custom user role

    $result = add_role ('salesperson', __('Salesperson'),
        array (
            'read' => true, // true allows this capability
            'edit_posts' => false, // Allows user to edit their own posts
            'edit_pages' => false, // Allows user to edit pages
            'edit_others_posts' => false, // Allows user to edit others posts not just their own
            'create_posts' => false, // Allows user to create new posts
            'manage_categories' => false, // Allows user to manage post categories
            'publish_posts' => false, // Allows the user to publish, otherwise posts stays in draft mode
            'edit_themes' => false, // false denies this capability. User can’t edit your theme
            'install_plugins' => false, // User cant add new plugins
            'update_plugin' => false, // User can’t update any plugins
            'update_core' => false // user cant perform core updates
        )
    );
    function modify_user_contact_methods( $user_contact ) {

        // Add user contact methods
        $user_contact['phone']   = __( 'Contact Phone Number'   );

        return $user_contact;
    }
    add_filter( 'user_contactmethods', 'modify_user_contact_methods' );