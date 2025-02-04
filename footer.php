<footer>
    <div class="logo">
        <a href="<?php echo get_home_url(); ?>">
            <img src="<?php echo _URLTHEME; ?>/assets/img/logo-bonadea-branco.png" alt="Logo Bonadea">
        </a>
    </div>
    <div class="center">
        <h3>Navegação</h3>
        <?php wp_nav_menu(array('theme_location' => 'footer_menu')); ?>
    </div>
    <div class="right">
       <a class="socials" href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a class="socials" href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a class="socials" href=""><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>