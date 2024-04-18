<?php

spl_autoload_register(function( $class ){
	$file = $class.".php";
	if( is_file($file) ){
		require_once $file;
	}
});

