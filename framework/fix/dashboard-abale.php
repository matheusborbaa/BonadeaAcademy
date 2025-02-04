<?php
/**
 * Plugin Name: Abale Dashboard
 * Plugin URI:
 * Description: Dashboard de Segurança da Abale
 * Version: 3.0
 * Author: Marcio Dias
 * Author URI: https://abale.com.br
 * License: GPL2
 */

// if(!function_exists('dashboard_abale_funcao')){

//     function dashboard_abale_funcao() {

//         include_once( ABSPATH . '/wp-admin/includes/plugin-install.php' );

//         if ( ! function_exists( 'get_plugins' ) ) {

//             require_once ABSPATH . 'wp-admin/includes/plugin.php';

//         }

//         $pagina = 'http://network.abale.com.br/api/servico/';

//         $currentVersion = get_option( 'mainwp_child_plugin_version' );
//         $mainwp_child_uniqueId = get_option( 'mainwp_child_uniqueId' );

//         $all_plugins = get_plugins();
//         $all_plugins = json_encode($all_plugins);
//         $all_plugins = base64_encode($all_plugins);

//         $data = array('dados' => array('plugins' => $all_plugins, 'wp-main' => $currentVersion, 'wp-main-id' => $mainwp_child_uniqueId, 'ip-servidor' => $_SERVER['SERVER_ADDR'], 'limite-memoria' => ini_get('memory_limit'), 'versao-php' => phpversion(), 'versao-wp' => $GLOBALS['wp_version'], 'servidor-software' => $_SERVER['SERVER_SOFTWARE']), 'time' => time());
//         $data_string = http_build_query($data);

//         $ch = curl_init();
//         curl_setopt( $ch, CURLOPT_URL, $pagina );
//         curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
//         curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
//         curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
//         $retorno = curl_exec( $ch );
//         curl_close( $ch );

//         $retorno = json_decode($retorno);

//         if($retorno->status == "ok"){

//             echo $retorno->html;

//         }else{

//             echo "<p>Erro ao obter dados da Abale.</p>";

//         }

//     }

//     if(!function_exists('add_dashboard_widget')){

//         function add_dashboard_widget() {

//             if ( 1 != get_user_meta( $user_id, 'show_abale_dashboard_widget', true ) ){

//                 update_user_meta( $user_id, 'show_abale_dashboard_widget', 1 );

//             }

//              wp_add_dashboard_widget('abale_dashboard_widget', 'Painel de Segurança', 'dashboard_abale_funcao');

//         }

//         add_action('wp_dashboard_setup', 'add_dashboard_widget');

//     }

// }
