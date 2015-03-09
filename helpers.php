<?php

	//Declarando una funcion
	function view($template, $vars = array())
	{
		extract($vars);
		
		require "views/$template.tpl.php";
	}

	//Declarando la funcion controller
	function controller($name)
	{	
		$file = "controllers/$name.php";
		exit($file);
		
		if(file_exists($file))
		{
			require $file;
		}
		else
		{
			header("HTTP/1.0 404 Not Found");
			exit("Pagina no encontrada");
		}
	}