<?php

if( !class_exists('Post_Type_Manage_Deactivation') ) {
    class Post_Type_Manage_Deactivation {
        public static function deactivate() {
            flush_rewrite_rules();
        }
    }
}
