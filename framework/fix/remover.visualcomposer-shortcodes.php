<?php








#Hide Revolution Slider generator
add_filter('wp_enqueue_scripts', 'clear_revslider', 100);
if(!function_exists('clear_revslider')){
    function clear_revslider(){
        if(class_exists('RevSliderFront')){
            remove_action('wp_head', array('RevSliderFront', 'add_meta_generator'));
        }
    }
}

#Hide activation nag for Visual Composer
if(function_exists('vc_license')){
    if(!function_exists('remove_vc_license_notice')){
        function remove_vc_license_notice(){
            remove_action('admin_notices',    array(vc_license(), 'adminNoticeLicenseActivation'));
        }
    }
    add_action('admin_init', 'remove_vc_license_notice', 100);

}


add_action( 'vc_after_init', 'us_vc_after_init' );
function us_vc_after_init() {
    $updater = vc_manager()->updater();
    $updateManager = $updater->updateManager();
    remove_filter( 'upgrader_pre_download', array( $updater, 'preUpgradeFilter' ) );
    remove_filter( 'pre_set_site_transient_update_plugins', array( $updateManager, 'check_update' ) );
    remove_filter( 'plugins_api', array( $updateManager, 'check_info' ) );
    remove_action( 'in_plugin_update_message-' . vc_plugin_name(), array( $updateManager, 'addUpgradeMessageLink' ) );
}




#Hide Visual Composer generator
if(function_exists('visual_composer')){
    add_action('wp', 'remove_vc_generator', 100);
    if(!function_exists('remove_vc_generator')){
        function remove_vc_generator(){
            remove_action('wp_head',    array(visual_composer(), 'addMetaData'));

            remove_action( 'wp_head', array(visual_composer(), 'addIEMinimalSupport'));



        }
    }



}





if (function_exists('vc_remove_element')) {
        
    add_action('init', function(){

        vc_remove_element('vc_flickr');
        vc_remove_element('vc_round_chart');
        vc_remove_element('vc_line_chart');
        vc_remove_element('vc_facebook');
        vc_remove_element('vc_gmaps');
        vc_remove_element('vc_googleplus');
        vc_remove_element('vc_twitter');
        vc_remove_element('vc_pinterest');

        vc_remove_element('vc_wp_search');
        vc_remove_element('vc_wp_meta');
        vc_remove_element('vc_wp_calendar');
        vc_remove_element('vc_wp_pages');
        vc_remove_element('vc_wp_tagcloud');
        vc_remove_element('vc_wp_custommenu');
        vc_remove_element('vc_wp_posts');
        vc_remove_element('vc_wp_categories');
        vc_remove_element('vc_wp_archives');
        vc_remove_element('vc_wp_rss');
        vc_remove_element("vc_wp_recentcomments");
        vc_remove_element('vc_pie');
        vc_remove_element('vc_btn');
        vc_remove_element("vc_single_image");

        vc_remove_element('vc_accordion');
        vc_remove_element('vc_tour');
        vc_remove_element('vc_tabs');
        vc_remove_element('vc_tweetmeme');
        
        vc_remove_element('blog');
        vc_remove_element('blog_news');
        vc_remove_element('blog_slider');
        vc_remove_element('vc_posts_slider');
       vc_remove_element('vc_basic_grid');
        vc_remove_element('vc_masonry_grid');
                
        vc_remove_element("vc_column_text");
        vc_remove_element("vc_widget_sidebar");
        vc_remove_element("vc_wp_text");
        vc_remove_element("vc_empty_space");
        //vc_remove_element("rev_slider");
        //vc_remove_element("rev_slider_vc");
        
        vc_remove_element("vc_zigzag");
        vc_remove_element("vc_hoverbox");
        vc_remove_element("vc_acf");
        //vc_remove_element("contact-form-7");
        
        vc_remove_element("vc_custom_heading");
        vc_remove_element("vc_text_separator");
        vc_remove_element("portfolio");
        vc_remove_element("portfolio_grid");
        vc_remove_element("portfolio_photo");
        vc_remove_element("portfolio_slider");
        
        vc_remove_element("vc_icon");
        vc_remove_element("vc_separator");
        vc_remove_element("vc_message");
        vc_remove_element("vc_toggle");
        vc_remove_element("vc_gallery");
        vc_remove_element("vc_images_carousel");
        vc_remove_element("vc_tta_tabs");
        vc_remove_element("vc_tta_tour");
        vc_remove_element("vc_tta_accordion");
        vc_remove_element("vc_tta_pageable");
        vc_remove_element("vc_cta");
        vc_remove_element("vc_progress_bar");
        vc_remove_element("vc_media_grid");
        vc_remove_element("vc_masonry_media_grid");
        vc_remove_element("article_box");
        vc_remove_element("vc_video");
        vc_remove_element("before_after");
        vc_remove_element("blockquote");
        vc_remove_element("call_to_action");
        vc_remove_element("chart");
        vc_remove_element("clients");
        vc_remove_element("clients_slider");
        vc_remove_element("code");
        vc_remove_element("contact_box");
        vc_remove_element("countdown");
        vc_remove_element("counter");
        vc_remove_element("fancy_heading");
        vc_remove_element("feature_list");
        vc_remove_element("flat_box");
        vc_remove_element("helper");
        vc_remove_element("hover_box");
        vc_remove_element("hover_color");
        vc_remove_element("how_it_works");
        vc_remove_element("icon_box");
        vc_remove_element("info_box");
        vc_remove_element("list");
        vc_remove_element("opening_hours");
        vc_remove_element("our_team");
        vc_remove_element("our_team_list");
        vc_remove_element("photo_box");
        vc_remove_element("pricing_item");
        vc_remove_element("progress_bars");
        vc_remove_element("promo_box");
        vc_remove_element("quick_fact");
        vc_remove_element("slider");
        vc_remove_element("sliding_box");
        vc_remove_element("story_box");
        vc_remove_element("testimonials");
        vc_remove_element("testimonials_list");
        vc_remove_element("zoom_box");
        
        

    }, 1, 1); 
        
}
