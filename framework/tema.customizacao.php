<?php 
function admin_header_css(){
	?>
	<style>
	#adminmenu li.wp-menu-separator{
		border-top: 1px solid rgba(158, 163, 168, 0.25) !important;
    margin-top: 10px !important;
    margin-bottom: 10px !important;
	height: 0px !important;
	}	
	<?php
}

add_action( 'admin_head', 'admin_header_css' );

function wps_admin_bar() {
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu('comments');
	$wp_admin_bar->remove_node('wp-logo');
	$wp_admin_bar->remove_node('about');
	$wp_admin_bar->remove_node('wporg');
	$wp_admin_bar->remove_node('documentation');
	$wp_admin_bar->remove_node('support-forums');
	$wp_admin_bar->remove_node('feedback');
	//$wp_admin_bar->remove_node('view-site');
    //remove_menu_page("menu-comments");
}
add_action( 'wp_before_admin_bar_render', 'wps_admin_bar' );

/* Change WordPress dashboard CSS */
function custom_admin_styles() {
	echo '<style type="text/css">#wpfooter img{height:20px;} #footer-thankyou{display:none;}#wpfooter .alignleft{float:right;}#wpfooter .alignright{float:left;}</style>';
}
add_action('admin_head', 'custom_admin_styles');

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Admin Login IMG
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function change_my_wp_login_image() {

$cor_fundo = "#f4f4f4";

$cor_principal = "#BBEF6A";
$cor_principal_texto = "#5A5A59";


	echo "
	<style>
			body{
background-color:".$cor_fundo." !important;
	background-size: cover;
	background-position: top center;
}
		
		input[type=checkbox]:checked:before, a, p#nav{
		color:".$cor_principal_texto." !important;
}

p#nav{
text-align:center;
}

	body.login #login h1 a {
	background: url('"._URLTHEME."/assets/img/admin/logo.png') center center no-repeat transparent;
	height:100px;
	width:100%;}
	

	#backtoblog{
	display:none;
	}
			
			.wp-core-ui .button-primary{
border:0px !important;
			background-color:".$cor_principal.";
			color:".$cor_principal_texto.";
						    text-shadow: 0 0px 0px ".$cor_principal.", 0px 0 0px ".$cor_principal.", 0 0px 0px ".$cor_principal.", 0px 0 0px ".$cor_principal." !important;
			
			
			box-shadow:0 0px 0 ".$cor_principal." !important;
			-webkit-box-shadow: 0 0px 0 ".$cor_principal." !important;
			
}
			.wp-core-ui .button-primary:hover, .wp-core-ui .button-primary:focus{
border:0px !important;
			background-color:".$cor_principal.";
			color:".$cor_principal_texto.";
			
			    
}


.login form{
	background:none !important;
	-webkit-box-shadow: none !important;
	box-shadow: none !important;
	border:0px;
}


.rodape-login{
	    position: fixed;
    left: 0px;
    right: 0px;
    padding: 10px;
    text-align: right;
    bottom: 0px;
}

.rodape-login span{
	display:none;
}

.rodape-login:hover span{
display:inline-block;
padding-right:10px;
}

.rodape-login img{
	opacity:0.30

	}


.rodape-login:hover img{
	opacity:1
	}
	</style>
	";
}
add_action("login_head", "change_my_wp_login_image");





function my_login_logo_url() {
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );





function my_login_logo_url_title() {
	return get_bloginfo( 'name' );
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );
