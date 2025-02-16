<?php

function registrar_post_equipe(){

    $labels = array(
        'name'                  =>     'Exemplo',
        'singular_name'         =>     'Exemplo',
        'add_new'               =>     'Novo Exemplo',
        'add_new_item'          =>     'Adicionar Exemplo',
    );

    $args = array(
        'labels'            =>      $labels,
        'public'            =>      true,
        'menu_icon'         =>      'dashicons-groups',
        'supports'          =>      array('title'),
    );

    register_post_type('exemplo', $args);

}

add_action('init', 'registrar_post_equipe');