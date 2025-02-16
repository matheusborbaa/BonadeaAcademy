<?php

function css_dinamico(){
	
	header("Content-type: text/css", true);

	Global $arrayTextoTamanho, $arrayTextoTamanhoMd, $vcCores, $arrayTextLineHeight, $arrayTextLineHeightMd;

	foreach($arrayTextoTamanho AS $key => $code){
		
		if($key){
			
			echo ".".$key."{"."\n";
			echo "font-size:".$code." !important;"."\n";
			echo "}"."\n";
			
		}
	
	
		echo ".espaco".(preg_replace('/[^0-9]/', '',$code))."{"."\n";
		echo "height:".$code." !important;"."\n";
		echo "}"."\n";
	
	}
	
	
	
	foreach($arrayTextLineHeight AS $key => $code){
		
		if($key){

			$numero = str_replace('line-height-', '', $key);

			echo "
			.font-".$numero.".txt-risco-inferior:after {
				height: ".($numero/2)."px;
				margin-top: -".(($numero/2)-10)."px;
			}";
			
			echo ".".$key."{"."\n";
			echo "line-height:".$code." !important;"."\n";
			echo "}"."\n";
			

		}
	
	
	
	}
	
	
	
	
	echo "@media only screen and (max-width: 992px) {"."\n";

		foreach($arrayTextoTamanhoMd AS $key => $code){
			
			if($key){
				
				echo ".".$key."{"."\n";
				echo "font-size:".$code." !important;"."\n";
				echo "}"."\n";
				
			}
		
		}
		
		
		foreach($arrayTextLineHeightMd AS $key => $code){
			
			if($key){
				
				$numero = str_replace('line-height-md-', '', $key);

				echo "
				.font-md-".$numero.".txt-risco-inferior:after {
					height: ".($numero/2)."px;
					margin-top: -5px;
				}"."\n";

				echo ".".$key."{"."\n";
					echo "line-height:".$code." !important;"."\n";
					echo "}"."\n";


				
			}
		
		}


	echo "}"."\n";
	
		
	foreach($vcCores AS $key => $code){
		
		echo ".txt-".$key.", a.txt-".$key.", a.txt-".$key.":hover{color:#".$code['rgb']."}";

		echo ".border-".$key."{border-color:#".$code['rgb']."}";
		
		echo ".bg-".$key."{background-color:#".$code['rgb']." !important;}";
		echo ".border-".$key.", .borda-".$key."{border-color:#".$code['rgb']." !important;}";
		
	}
	
	echo ".bg-transparente, .bg-transparent{background-color:transparent !important;}";

	die();
}

add_action('wp_ajax_Css', 'css_dinamico');
add_action('wp_ajax_nopriv_Css', 'css_dinamico');

if(!is_admin()){
	
	wp_enqueue_style('css-dinamico', admin_url('admin-ajax.php?action=Css'));
	
}
