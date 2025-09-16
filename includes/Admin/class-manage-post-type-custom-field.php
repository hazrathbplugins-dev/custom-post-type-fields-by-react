<?php
class PTM_Custom_Meta_Field_Manage {
    public function __construct() {
        add_action('edit_form_after_title', [$this, 'ptm_manage_meta_field_container']);
    }
    public function ptm_manage_meta_field_container( $post ) {
        if ( $post->post_type === 'hotel_room' ) {
            echo '<div id="admin-hotel-room-option" />';
        }
    }
}
