<?php

function disable_plugin_updates( $value ) {
    
    if ( isset($value) && is_object($value) ) {

        $arrayPluginRemover = array(
        'acf-options-page/acf-options-page.php',
        'advanced-custom-fields-pro/acf.php',
        'revslider/revslider.php',
        'templatera/templatera.php',
        'js_composer/js_composer.php',
        );

        foreach($arrayPluginRemover AS $plugin_key => $plugin_code){

            if(isset($value->response[$plugin_code])){

                unset($value->response[$plugin_code]);

            }

        }

    }
    
    return $value;

}

add_filter( 'site_transient_update_plugins', 'disable_plugin_updates' );
