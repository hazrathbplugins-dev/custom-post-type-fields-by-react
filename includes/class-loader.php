<?php
if( !class_exists('Post_Type_Manage_Loader') ) {
    class Post_Type_Manage_Loader {
        public static function init() {
            require_once PTM_PLUGIN_DIR . 'includes/class-activation.php';
            require_once PTM_PLUGIN_DIR . 'includes/class-deactivation.php';


            require_once PTM_PLUGIN_DIR . 'includes/PostType/class-post-type-handler.php';
            require_once PTM_PLUGIN_DIR . 'includes/Assets/class-assets-loader.php';
            require_once PTM_PLUGIN_DIR . 'includes/Admin/class-manage-post-type-custom-field.php';

            new PTM_Create_Post_Type_Handler();
            new PTM_Assets_Loader();
            new PTM_Custom_Meta_Field_Manage();
        }
    }
}