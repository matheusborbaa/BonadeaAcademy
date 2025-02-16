<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Remover assinatura Visual Composer
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function grve_vc_disable_updater() {
        global $vc_manager;
        if ( $vc_manager && method_exists( $vc_manager , 'updater' ) ) {
            $updater = $vc_manager->updater();
            remove_filter( 'upgrader_pre_download', array( $updater, 'preUpgradeFilter' ), 10, 4 );
            remove_action( 'wp_ajax_nopriv_vc_check_license_key', array( $updater, 'checkLicenseKeyFromRemote' ) );
            if ( $updater && method_exists( $updater , 'updateManager' ) ) {
                $updatingManager = $updater->updateManager();
                remove_filter( 'pre_set_site_transient_update_plugins', array( $updatingManager, 'check_update' ) );
                remove_filter( 'plugins_api', array( $updatingManager, 'check_info' ), 10, 3 );
                if ( function_exists( 'vc_plugin_name' ) ) {
                    remove_action( 'after_plugin_row_' . vc_plugin_name(), 'wp_plugin_update_row', 10, 2 );
                    remove_action( 'in_plugin_update_message-' . vc_plugin_name(), array( $updatingManager, 'addUpgradeMessageLink' ) );
                }
            }
        }
        if ( $vc_manager && method_exists( $vc_manager , 'license' ) ) {
            $license = $vc_manager->license();
            remove_action( 'admin_notices', array( $license, 'adminNoticeLicenseActivation' ) );
        }

}
add_action( 'admin_init', 'grve_vc_disable_updater', 99 );