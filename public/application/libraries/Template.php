<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Template{
		function show($view, $data=array()){
			$CI = & get_instance();
			//carrega o conteúdo da header
			$CI->load->view("template/header",$data);
			//carrega o conteúdo da página(main)
			$CI->load->view($view,$data);
			//carrega o rodapé
			$CI->load->view("template/footer",$data);
			$CI->load->view("template/scripts",$data);
		}
	}
?>
