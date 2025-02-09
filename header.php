<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <nav class="nav">
    <button class="menu" id="menu">
            <span class="um"></span>
            <span class="dois"></span>
            <span class="tres"></span>
        </button>   
        <div class="options">
            <div class="logo">
                <a href="<?php echo get_home_url(); ?>">
                    <img src="<?php echo _URLTHEME; ?>/assets/img/logo.png" alt="Logo Jacomossi">
                </a>
            </div>
            
        </div>
                
        <?php wp_nav_menu(array('theme_location' => 'main_menu')); ?>
    </nav>