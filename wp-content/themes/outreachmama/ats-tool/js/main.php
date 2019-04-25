<?php
	header('Content-Type: application/javascript');

	$main  = file_get_contents('main/1-init.js');
	$main .= file_get_contents('main/2-functions.js');
	$main .= file_get_contents('main/3-ui.js');
	$main .= file_get_contents('main/4-main.js');
	
	echo $main;