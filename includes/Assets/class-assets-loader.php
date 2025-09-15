<?php
class PTM_Assets_Loader {
    public function __construct() {
        add_action( 'admin_enqueue_scripts', [ $this, 'enqueue_admin_assets' ] );
    }

    public function enqueue_admin_assets( ) {
        wp_enqueue_script(
            'ptm-admin-script',
            PTM_PLUGIN_URL . 'dist/index.js',
            [ 'jquery', 'react', 'react-dom' ],
            PTM_VERSION,
            true
        );

        wp_enqueue_style(
            'ptm-admin-style',
            PTM_PLUGIN_URL . 'dist/admin.css',
            [],
            PTM_VERSION
        );
        wp_localize_script(
            'ptm-admin-script',
            'submittedData',
            [
                'ajax_url' => admin_url('admin-ajax.php'),
                'nonce'    => wp_create_nonce('form-submission'),
            ]
        );
    }
}
?>