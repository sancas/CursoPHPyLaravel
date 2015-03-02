<?php

	$language = "PHP";
	$confidencial = "wow suck private very confidential";

	//Declarando una funcion
	function view($language)
	{
		require "view.php";
	}

	//Llamando una funcion
	view($language);