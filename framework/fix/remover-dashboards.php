<?php

function removerWidgetsHome() {

    global $wp_meta_boxes;
    
    $arrayPermitir = array(
    'abale_dashboard_widget',
    'dashboard_right_now',
    );
    
    if(is_array($wp_meta_boxes['dashboard']) AND count($wp_meta_boxes['dashboard']) > 0){
        
        foreach($wp_meta_boxes['dashboard'] AS $dashboard_key => $dashboard){

            if(is_array($dashboard) AND count($dashboard) > 0){
            
                foreach($dashboard AS $code_key => $code){
                    
                    if(is_array($code) AND count($code) > 0){

                        foreach($code AS $dash_item_key => $dash_item){

                            if(!in_array($dash_item_key, $arrayPermitir)){

                                unset($wp_meta_boxes['dashboard'][$dashboard_key][$code_key][$dash_item_key]);

                            }

                        }
                        
                    }

                }
                
            }


        }
        
    }
    
    remove_action('welcome_panel', 'wp_welcome_panel');

}

add_action('wp_dashboard_setup', 'removerWidgetsHome', 999);
