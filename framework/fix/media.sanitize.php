<?php

//Tratar o título da mídia para não ser tão agressivo
add_filter('wp_insert_attachment_data', function( $data, $postarr ){
 
    $basename = pathinfo( $postarr['file'] );
    
    $data['post_title'] = preg_replace("/-/", " ", sanitize_text_field( $basename['filename'] ));
    
    return $data;

}, 10, 2 );

//Utilizar o Sanitize Title do Wordpress para limpar o nome do arquivo e remover acentos
add_filter( 'sanitize_file_name', function( $filename ) {
 
    $info = pathinfo( $filename );
    
    $filename = strtr($info['filename'],'àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ','aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY');
    $filename = preg_replace("/[^a-zA-Z0-9 -]/", "", $filename);
    
    $filename = sanitize_title($filename);
    $filename = str_replace('--','-', $filename);
 
    return $filename.'.'.$info['extension'];
    
}, 10, 1 );
