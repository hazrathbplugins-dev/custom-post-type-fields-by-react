<?php
if( !class_exists('PTM_Create_Post_Type_Handler') ){
    class PTM_Create_Post_Type_Handler {
        public function __construct(){
            add_action('init', [$this, 'register_post_type']);
        }
        public function register_post_type() {
            $labels = [
                'name'                  => 'Hotel Rooms',
                'singular_name'         => 'Hotel Room',
                'menu_name'             => 'Hotel Rooms',
                'name_admin_bar'        => 'Hotel Room',
                'add_new'               => 'Add New',
                'add_new_item'          => 'Add New Hotel Room',
                'edit_item'             => 'Edit Hotel Room',
                'new_item'              => 'New Hotel Room',
                'view_item'             => 'View Hotel Room',
                'all_items'             => 'All Hotel Rooms',
                'search_items'          => 'Search Hotel Rooms',
                'not_found'             => 'No hotel rooms found.',
                'not_found_in_trash'    => 'No hotel rooms found in Trash.'
            ];

            $args = [
                'labels'             => $labels,
                'public'             => true,
                'has_archive'        => true,
                'show_in_rest'       => true,
                'supports'           => ['title'],
                'menu_position'      => 37,
                'menu_icon'          => 'dashicons-admin-home', // icon for Hotel Rooms
                'rewrite'            => ['slug' => 'hotel-room'], // URL slug
            ];

            register_post_type('hotel_room', $args);
        }
    }
}

?>