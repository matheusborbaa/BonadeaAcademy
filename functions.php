<?php

add_action( 'after_setup_theme', function() {

    add_theme_support('post-thumbnails');
    add_theme_support( 'title-tag' );

});

define('_THEMEABS', ABSPATH);
define('_URLTHEME', get_template_directory_uri());
define('_PATHTHEME', get_stylesheet_directory());

//Tema CSS
require_once(_PATHTHEME."/framework/tema.css.php");

//Fonts
require_once(_PATHTHEME."/framework/fonts.php");

//Posts
require_once(_PATHTHEME."/framework/posts/exemplo.php");

//Assets
require_once(_PATHTHEME."/framework/assets.php");

//Menu
require_once(_PATHTHEME."/framework/menu.php");

//Customização
require_once(_PATHTHEME."/framework/tema.customizacao.php");

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//FIX
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//DESATIVA GUTENBERG
add_filter('use_block_editor_for_post', '__return_false');


$fix_path = TEMPLATEPATH."/framework/fix";
$ponteiroClasses = opendir ($fix_path);
while ( $nomeArquivosClasses = readdir ( $ponteiroClasses ) ) {

  $diretorio = $fix_path."/".$nomeArquivosClasses;

    if(($nomeArquivosClasses != '.') AND ($nomeArquivosClasses != '..')){

        if(file_exists($diretorio) AND $nomeArquivosClasses){

            require_once($diretorio);

        }

    }

}
