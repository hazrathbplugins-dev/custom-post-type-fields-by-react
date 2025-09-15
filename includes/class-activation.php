<?php

if( !class_exists('Post_Type_Manage_Activation' )) {
    class Post_Type_Manage_Activation {
        public static function activate() {
            flush_rewrite_rules();
        }
    }
}